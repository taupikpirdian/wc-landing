<?php

namespace App\Filament\Resources\Testimonies\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TestimoniesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable(false)
                    ->sortable(),

                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('position')
                    ->label('Position')
                    ->searchable()
                    ->sortable()
                    ->placeholder('No position'),

                TextColumn::make('desc')
                    ->label('Testimony')
                    ->searchable()
                    ->limit(100)
                    ->wrap(),

                TextColumn::make('image')
                    ->label('Image')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        $src = route('file', ['path' => $state]);
                        return '<img src="' . e($src) . '" style="width:60px;height:60px;border-radius:50%;object-fit:cover;" />';
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
            ->emptyStateHeading('No testimonies found')
            ->emptyStateDescription('Create your first testimony to get started.');
    }
}
