<?php

namespace App\Filament\Resources\AboutUs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AboutUsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable(false)
                    ->sortable(),

                TextColumn::make('title')
                    ->label('Company Title')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),

                TextColumn::make('desc')
                    ->label('Description')
                    ->searchable()
                    ->limit(50)
                    ->wrap(),

                TextColumn::make('image_testimony')
                    ->label('Testimonial Image')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        $src = route('file', ['path' => $state]);
                        return '<img src="' . e($src) . '" style="width:80px;height:60px;border-radius:6px;object-fit:cover;" />';
                    })
                    ->html(),

                TextColumn::make('since')
                    ->label('Since')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),

                TextColumn::make('mission_count')
                    ->label('Mission Points')
                    ->getStateUsing(fn ($record) => is_array($record->mission) ? count($record->mission) : 0)
                    ->badge()
                    ->color('success'),

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
            ->emptyStateHeading('No about information found')
            ->emptyStateDescription('Create your first about information to get started.');
    }
}
