<?php

namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortfoliosTable
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
                    ->sortable()
                    ->limit(80)
                    ->wrap(),

                TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Slug copied to clipboard')
                    ->copyMessageDuration(1500),

                TextColumn::make('desc')
                    ->searchable()
                    ->limit(100)
                    ->wrap(),

                TextColumn::make('client_review')
                    ->label('Client Review')
                    ->searchable()
                    ->limit(80)
                    ->wrap()
                    ->placeholder('No review'),

                TextColumn::make('image_cover')
                    ->label('Image Cover')
                    ->formatStateUsing(function ($state) {
                        if (!$state) return '-';
                        $src = route('file', ['path' => $state]);
                        return '<img src="' . e($src) . '" style="width:100px;height:70px;border-radius:6px;object-fit:cover;" />';
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
            ->emptyStateHeading('No portfolios found')
            ->emptyStateDescription('Create your first portfolio to get started.');
    }
}
