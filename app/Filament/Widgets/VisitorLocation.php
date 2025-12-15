<?php

namespace App\Filament\Widgets;

use App\Services\AnalyticsService;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Spatie\Analytics\Period;

class VisitorLocation extends BaseWidget
{
    protected static ?int $sort = 4;
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        $service = app(AnalyticsService::class);
        $current = Period::create(now()->subDays(29), now());
        $records = $service->topGeo($current, 10)->toArray();

        return $table
            ->heading('Lokasi Pengunjung')
            ->description('Negara dan kota pengunjung (30 hari). Berguna untuk bahasa konten & target ads.')
            ->columns([
                TextColumn::make('country')->label('Negara')->limit(40)->wrap(),
                TextColumn::make('city')->label('Kota')->limit(40)->wrap(),
                TextColumn::make('totalUsers')->label('Users')->sortable()->numeric(),
            ])
            ->records(fn () => $records);
    }
}
