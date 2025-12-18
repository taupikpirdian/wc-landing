<?php

namespace App\Filament\Resources\ServiceAreas\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class ServiceAreaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service Area Details')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('address')
                            ->maxLength(65535),
                        FileUpload::make('image')
                            ->label('Area Image')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('service-areas')
                            ->visibility('public')
                            ->maxSize(2048)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                            ->helperText('Format: JPG, PNG, WEBP. Max: 2MB')
                            ->required(),
                        FileUpload::make('icon_pin_map')
                            ->label('Map Pin Icon')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('service-areas/pins')
                            ->visibility('public')
                            ->maxSize(1024)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                            ->helperText('Recommended: SVG or PNG with transparent background. Max: 1MB'),
                        TextInput::make('latitude'),
                        TextInput::make('longitude'),
                    ])
                    ->columns(2),
            ]);
    }
}
