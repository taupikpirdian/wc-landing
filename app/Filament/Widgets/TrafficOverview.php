<?php

namespace App\Filament\Widgets;

use App\Services\AnalyticsService;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Spatie\Analytics\Period;

class TrafficOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getHeading(): string
    {
        return 'Traffic Overview';
    }

    protected function getDescription(): string
    {
        return 'Ringkasan trafik: users, sessions, dan page views (tren 30 hari).';
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
            Stat::make('Total Users', number_format($curr['totalUsers']))
                ->description($this->formatDelta($delta['totalUsers']))
                ->descriptionIcon($delta['totalUsers'] >= 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-arrow-trending-down')
                ->color($delta['totalUsers'] >= 0 ? 'success' : 'danger'),

            Stat::make('New Users', number_format($curr['newUsers']))
                ->description($this->formatDelta($delta['newUsers']))
                ->descriptionIcon($delta['newUsers'] >= 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-arrow-trending-down')
                ->color($delta['newUsers'] >= 0 ? 'success' : 'danger'),

            Stat::make('Sessions', number_format($curr['sessions']))
                ->description($this->formatDelta($delta['sessions']))
                ->descriptionIcon($delta['sessions'] >= 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-arrow-trending-down')
                ->color($delta['sessions'] >= 0 ? 'success' : 'danger'),

            Stat::make('Page Views', number_format($curr['pageViews']))
                ->description($this->formatDelta($delta['pageViews']))
                ->descriptionIcon($delta['pageViews'] >= 0 ? 'heroicon-o-arrow-trending-up' : 'heroicon-o-arrow-trending-down')
                ->color($delta['pageViews'] >= 0 ? 'success' : 'danger'),

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
