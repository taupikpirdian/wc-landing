<?php

namespace App\Filament\Resources\SeoSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeoSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable(false)
                    ->sortable(),

                TextColumn::make('page')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),

                TextColumn::make('title')
                    ->limit(50)
                    ->wrap()
                    ->searchable()
                    ->placeholder('No title'),

                TextColumn::make('meta_title')
                    ->limit(60)
                    ->wrap()
                    ->searchable()
                    ->placeholder('No meta title'),

                TextColumn::make('meta_description')
                    ->limit(100)
                    ->wrap()
                    ->searchable()
                    ->placeholder('No meta description'),

                ImageColumn::make('og_image')
                    ->label('OG Image')
                    ->size(50)
                    ->circular()
                    ->defaultImageUrl(null),

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
            ->emptyStateHeading('No SEO settings found')
            ->emptyStateDescription('Create your first SEO setting to get started.');
    }
}
