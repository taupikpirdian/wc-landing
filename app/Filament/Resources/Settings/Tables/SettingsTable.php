<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable(false)
                    ->sortable(),

                ImageColumn::make('logo')
                    ->label('Logo')
                    ->size(60)
                    ->circular()
                    ->defaultImageUrl(null),

                TextColumn::make('facebook')
                    ->label('Facebook')
                    ->url(fn ($record) => $record->facebook)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-globe-alt')
                    ->copyable()
                    ->copyMessage('Facebook URL copied to clipboard')
                    ->copyMessageDuration(1500),

                TextColumn::make('twitter')
                    ->label('Twitter/X')
                    ->url(fn ($record) => $record->twitter)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-globe-alt')
                    ->copyable()
                    ->copyMessage('Twitter URL copied to clipboard')
                    ->copyMessageDuration(1500),

                TextColumn::make('instagram')
                    ->label('Instagram')
                    ->url(fn ($record) => $record->instagram)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-globe-alt')
                    ->copyable()
                    ->copyMessage('Instagram URL copied to clipboard')
                    ->copyMessageDuration(1500),

                TextColumn::make('youtube')
                    ->label('YouTube')
                    ->url(fn ($record) => $record->youtube)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-globe-alt')
                    ->copyable()
                    ->copyMessage('YouTube URL copied to clipboard')
                    ->copyMessageDuration(1500),

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
            ->emptyStateHeading('No settings found')
            ->emptyStateDescription('Create your first settings configuration to get started.');
    }
}
