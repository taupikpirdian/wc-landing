<?php

namespace App\Filament\Resources\Sliders\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SliderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->label('Title')
                    ->maxLength(255),

                TextInput::make('tagline')
                    ->label('Tagline')
                    ->nullable()
                    ->maxLength(255)
                    ->helperText('Short tagline or subtitle for the slider'),

                Textarea::make('desc')
                    ->rows(3)
                    ->label('Description')
                    ->nullable()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->required(fn (string $context): bool => $context === 'create')
                    ->label('Image')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('sliders')
                    ->visibility('public')
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg'])
                    ->helperText('JPEG, PNG, or JPG files only, max 2MB')
                    ->columnSpanFull(),
            ]);
    }
}
