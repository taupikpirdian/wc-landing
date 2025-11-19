<?php

namespace App\Filament\Resources\ContactUs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactUsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable(false)
                    ->sortable(),

                TextColumn::make('mail')
                    ->label('Email')
                    ->searchable()
                    ->wrap()
                    ->limit(50),

                TextColumn::make('location')
                    ->searchable()
                    ->wrap()
                    ->limit(50),

                TextColumn::make('phone')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Phone number copied to clipboard')
                    ->copyMessageDuration(1500),

                TextColumn::make('mobile')
                    ->searchable()
                    ->copyable()
                    ->copyMessage('Mobile number copied to clipboard')
                    ->copyMessageDuration(1500),

                TextColumn::make('workingTimes_count')
                    ->label('Working Days')
                    ->counts('workingTimes')
                    ->sortable()
                    ->badge()
                    ->color('success'),

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
            ->emptyStateHeading('No contact information found')
            ->emptyStateDescription('Create your first contact information to get started.');
    }
}
