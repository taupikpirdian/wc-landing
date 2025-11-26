<?php

namespace App\Filament\Resources\Services\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServicesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable(false)
                    ->sortable(),

                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Slug copied to clipboard')
                    ->copyMessageDuration(1500),

                TextColumn::make('label')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('summary')
                    ->limit(50)
                    ->wrap()
                    ->searchable(),

                TextColumn::make('image_icon')
                    ->label('Icon')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        $isFa = is_string($state) && (str_starts_with($state, 'fa ') || str_starts_with($state, 'fa-') || str_contains($state, ' fa-'));
                        if ($isFa) {
                            return '<i class="' . e($state) . '" style="font-size:20px;"></i>';
                        }
                        if (is_string($state) && str_starts_with($state, 'public/')) {
                            $src = route('file', ['path' => $state]);
                            return '<img src="' . e($src) . '" style="width:50px;height:50px;border-radius:50%;object-fit:cover;" />';
                        }
                        return e($state);
                    })
                    ->html(),

                TextColumn::make('image_cover')
                    ->label('Image Cover')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        $src = route('file', ['path' => $state]);
                        return '<img src="' . e($src) . '" style="width:80px;height:60px;border-radius:6px;object-fit:cover;" />';
                    })
                    ->html(),

                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('M d, Y H:i')
                    ->sortable(),
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
            ->emptyStateHeading('No services found')
            ->emptyStateDescription('Create your first service to get started.');
    }
}
