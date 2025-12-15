<?php

namespace App\Filament\Widgets;

use App\Services\AnalyticsService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Analytics\Period;

class EngagementOverview extends BaseWidget
{
    protected static ?int $sort = 2;

    protected function getHeading(): string
    {
        return 'Engagement';
    }

    protected function getDescription(): string
    {
        return 'Metrix keterlibatan: waktu rata-rata, engaged sessions, dan engagement rate.';
    }

    protected function getStats(): array
    {
        $service = app(AnalyticsService::class);
        $current = Period::create(now()->subDays(29), now());
        $previous = Period::create(now()->subDays(59), now()->subDays(30));
        $data = $service->compare($current, $previous);

        $curr = $data['current'];
        $delta = $data['delta'];

        return [
            Stat::make('Avg Engagement Time', $this->formatSeconds($curr['avgEngagementTime'] ?? 0))
                ->description($this->formatDelta($delta['avgEngagementTime'] ?? 0))
                ->descriptionIcon(($delta['avgEngagementTime'] ?? 0) >= 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-arrow-trending-down')
                ->color(($delta['avgEngagementTime'] ?? 0) >= 0 ? 'success' : 'danger'),

            Stat::make('Engaged Sessions', number_format($curr['engagedSessions'] ?? 0))
                ->description($this->formatDelta($delta['engagedSessions'] ?? 0))
                ->descriptionIcon(($delta['engagedSessions'] ?? 0) >= 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-arrow-trending-down')
                ->color(($delta['engagedSessions'] ?? 0) >= 0 ? 'success' : 'danger'),

            Stat::make('Engagement Rate', $this->formatPercent($curr['engagementRate'] ?? 0))
                ->description($this->formatDelta($delta['engagementRate'] ?? 0))
                ->descriptionIcon(($delta['engagementRate'] ?? 0) >= 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-arrow-trending-down')
                ->color(($delta['engagementRate'] ?? 0) >= 0 ? 'success' : 'danger'),
        ];
    }

    private function formatDelta(float $delta): string
    {
        $sign = $delta >= 0 ? '+' : '';
        return $sign . number_format($delta, 2) . '%';
    }

    private function formatSeconds(float $seconds): string
    {
        $seconds = (int) round($seconds);
        $h = intdiv($seconds, 3600);
        $m = intdiv($seconds % 3600, 60);
        $s = $seconds % 60;
        if ($h > 0) {
            return sprintf('%02d:%02d:%02d', $h, $m, $s);
        }
        return sprintf('%02d:%02d', $m, $s);
    }

    private function formatPercent(float $value): string
    {
        $v = $value <= 1 ? ($value * 100) : $value;
        return number_format($v, 2) . '%';
    }
}
