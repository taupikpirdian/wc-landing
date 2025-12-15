<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Spatie\Analytics\Facades\Analytics;
use Spatie\Analytics\Period;
use Google\Analytics\Data\V1beta\OrderBy;
use Google\Analytics\Data\V1beta\OrderBy\MetricOrderBy;

class AnalyticsService
{
    private const CACHE_VERSION = 'v2';
    public function overview(Period $period): array
    {
        $cacheKey = sprintf('ga4_overview_%s_%s_%s', self::CACHE_VERSION, $period->startDate->format('Ymd'), $period->endDate->format('Ymd'));
        return Cache::remember($cacheKey, now()->addMinutes(config('analytics.cache_lifetime_in_minutes', 60)), function () use ($period): array {
            $rows = Analytics::get($period, ['totalUsers', 'newUsers', 'sessions', 'screenPageViews', 'averageSessionDuration', 'engagedSessions', 'engagementRate']);
            $first = $rows->first() ?? [];
            return [
                'totalUsers' => (int) Arr::get($first, 'totalUsers', 0),
                'newUsers' => (int) Arr::get($first, 'newUsers', 0),
                'sessions' => (int) Arr::get($first, 'sessions', 0),
                'pageViews' => (int) Arr::get($first, 'screenPageViews', 0),
                'avgEngagementTime' => (float) Arr::get($first, 'averageSessionDuration', 0),
                'engagedSessions' => (int) Arr::get($first, 'engagedSessions', 0),
                'engagementRate' => (float) Arr::get($first, 'engagementRate', 0),
            ];
        });
    }

    public function compare(Period $current, Period $previous): array
    {
        $curr = $this->overview($current);
        $prev = $this->overview($previous);
        return [
            'current' => $curr,
            'previous' => $prev,
            'delta' => [
                'totalUsers' => $this->delta($curr['totalUsers'], $prev['totalUsers']),
                'newUsers' => $this->delta($curr['newUsers'], $prev['newUsers']),
                'sessions' => $this->delta($curr['sessions'], $prev['sessions']),
                'pageViews' => $this->delta($curr['pageViews'], $prev['pageViews']),
                'avgEngagementTime' => $this->deltaFloat($curr['avgEngagementTime'], $prev['avgEngagementTime']),
                'engagedSessions' => $this->delta($curr['engagedSessions'], $prev['engagedSessions']),
                'engagementRate' => $this->deltaFloat($curr['engagementRate'], $prev['engagementRate']),
            ],
        ];
    }

    public function topPages(Period $period, int $limit = 10)
    {
        $cacheKey = sprintf('ga4_top_pages_%s_%s_%d_%s', $period->startDate->format('Ymd'), $period->endDate->format('Ymd'), $limit, self::CACHE_VERSION);
        return Cache::remember($cacheKey, now()->addMinutes(config('analytics.cache_lifetime_in_minutes', 60)), function () use ($period, $limit) {
            $orderBy = [
                (new OrderBy())
                    ->setMetric((new MetricOrderBy())->setMetricName('screenPageViews'))
                    ->setDesc(true),
            ];
            $rows = Analytics::get($period, ['screenPageViews', 'userEngagementDuration'], ['pageTitle', 'pagePath'], $limit, $orderBy);
            return $rows->map(function ($row) {
                $views = (int) Arr::get($row, 'screenPageViews', 0);
                $engagement = (float) Arr::get($row, 'userEngagementDuration', 0);
                $avg = $views > 0 ? ($engagement / $views) : 0.0;
                return [
                    'pageTitle' => Arr::get($row, 'pageTitle', ''),
                    'pagePath' => Arr::get($row, 'pagePath', ''),
                    'screenPageViews' => $views,
                    'avgEngagement' => $avg,
                ];
            });
        });
    }

    public function topGeo(Period $period, int $limit = 10)
    {
        $cacheKey = sprintf('ga4_top_geo_%s_%s_%d_%s', $period->startDate->format('Ymd'), $period->endDate->format('Ymd'), $limit, self::CACHE_VERSION);
        return Cache::remember($cacheKey, now()->addMinutes(config('analytics.cache_lifetime_in_minutes', 60)), function () use ($period, $limit) {
            $orderBy = [
                (new OrderBy())
                    ->setMetric((new MetricOrderBy())->setMetricName('totalUsers'))
                    ->setDesc(true),
            ];
            $rows = Analytics::get($period, ['totalUsers'], ['country', 'city'], $limit, $orderBy);
            return $rows->map(function ($row) {
                return [
                    'country' => Arr::get($row, 'country', ''),
                    'city' => Arr::get($row, 'city', ''),
                    'totalUsers' => (int) Arr::get($row, 'totalUsers', 0),
                ];
            });
        });
    }

    private function delta(int $current, int $previous): float
    {
        if ($previous === 0) {
            return $current > 0 ? 100.0 : 0.0;
        }
        return (($current - $previous) / $previous) * 100.0;
    }

    private function deltaFloat(float $current, float $previous): float
    {
        if ($previous == 0.0) {
            return $current > 0.0 ? 100.0 : 0.0;
        }
        return (($current - $previous) / $previous) * 100.0;
    }
}
