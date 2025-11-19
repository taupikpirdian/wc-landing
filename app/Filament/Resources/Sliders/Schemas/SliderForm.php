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
                    ->maxLength(255)
                    ->label('Title'),

                Textarea::make('desc')
                    ->label('Description')
                    ->rows(3)
                    ->nullable()
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->required(fn (string $context): bool => $context === 'create')
                    ->label('Image')
                    ->image()
                    ->imageEditor()
                    ->directory('public/sliders')
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->helperText('JPEG or PNG files only, max 2MB'),
            ]);
    }
}
