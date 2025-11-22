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

                ImageColumn::make('image_icon')
                    ->label('Image Icon')
                    ->size(50) // Small thumbnail for icon
                    ->circular()
                    ->defaultImageUrl(null),

                ImageColumn::make('image_cover')
                    ->label('Image Cover')
                    ->size(80) // Thumbnail for cover
                    ->circular(false) // Rectangular for cover
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
            ->emptyStateHeading('No services found')
            ->emptyStateDescription('Create your first service to get started.');
    }
}
