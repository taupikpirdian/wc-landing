<?php

namespace App\Filament\Resources\OurAdvantages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class OurAdvantageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Advantage Information')
                    ->description('Company statistics and achievements')
                    ->schema([
                        TextInput::make('number')
                            ->label('Number/Count')
                            ->required()
                            ->numeric()
                            ->placeholder('e.g., 150, 25, 500')
                            ->helperText('The number to display (e.g., number of projects, clients, years)'),

                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., Projects Completed, Happy Clients')
                            ->helperText('Title that describes what the number represents'),
                    ])
                    ->columns(2),

                Section::make('Description & Icon')
                    ->description('Additional information and visual representation')
                    ->schema([
                        Textarea::make('desc')
                            ->label('Description')
                            ->required()
                            ->rows(3)
                            ->placeholder('Brief description of this advantage...')
                            ->helperText('Detailed description of this achievement or advantage'),

                        FileUpload::make('icon')
                            ->label('Icon')
                            ->image()
                            ->imageEditor()
                            ->directory('public/advantages')
                            ->visibility('public')
                            ->maxSize(1024) // 1MB
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                            ->helperText('Upload an icon or image to represent this advantage (max 1MB)')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
            ]);
    }
}
