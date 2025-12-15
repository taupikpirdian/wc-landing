<?php

namespace App\Filament\Widgets;

use App\Services\AnalyticsService;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Spatie\Analytics\Period;

class TopPages extends BaseWidget
{
    protected static ?int $sort = 3;
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        $service = app(AnalyticsService::class);
        $current = Period::create(now()->subDays(29), now());
        $records = $service->topPages($current, 10)->toArray();

        return $table
            ->heading('Top Pages')
            ->description('Halaman teratas berdasarkan page views dan rata-rata waktu di halaman (30 hari).')
            ->columns([
                TextColumn::make('pageTitle')->label('Page Title')->limit(60)->wrap(),
                TextColumn::make('pagePath')->label('URL')->limit(80)->wrap(),
                TextColumn::make('screenPageViews')->label('Page Views')->sortable()->numeric(),
                TextColumn::make('avgEngagement')->label('Avg Time on Page')->formatStateUsing(fn ($state) => $this->formatSeconds((float) $state)),
            ])
            ->records(fn () => $records);
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
}
