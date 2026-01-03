<?php

namespace App\Filament\Resources\OurAdvantages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class OurAdvantagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable(false)
                    ->sortable(),

                TextColumn::make('number')
                    ->label('Number')
                    ->numeric()
                    ->sortable()
                    ->badge()
                    ->color('primary')
                    ->size('lg'),

                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),

                TextColumn::make('desc')
                    ->label('Description')
                    ->searchable()
                    ->limit(50)
                    ->wrap(),

                TextColumn::make('icon')
                    ->label('Icon')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        if (is_string($state) && str_starts_with($state, 'public/')) {
                            $url = Storage::disk('public')->url($state);
                            $src = asset(str_replace('public/', '', $url));
                            return '<img src="' . e($src) . '" style="width:40px;height:40px;border-radius:50%;object-fit:contain;" />';
                        }
                        return '<i class="' . e($state) . '" style="font-size:22px;"></i>';
                    })
                    ->html(),

                IconColumn::make('enable_main_slider')
                    ->label('Main Slider')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                IconColumn::make('enable_slider')
                    ->label('Slider')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                // Add empty state actions will be handled by the List page
            ])
            ->emptyStateHeading('No advantages found')
            ->emptyStateDescription('Create your first company advantage to showcase achievements.');
    }
}
