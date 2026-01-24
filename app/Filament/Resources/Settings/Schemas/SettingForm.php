<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Logo Settings')
                    ->description('Website logo and branding')
                    ->schema([
                        FileUpload::make('logo')
                            ->label('Website Logo')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('settings')
                            ->visibility('public')
                            ->maxSize(2048) // 2MB
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                            ->helperText('Upload your website logo (PNG, JPG, WEBP, SVG, max 2MB)')
                            ->columnSpanFull(),
                    ]),

                Section::make('Social Media')
                    ->description('Social media profile links')
                    ->schema([
                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->url()
                            ->placeholder('https://facebook.com/your-page')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('Facebook page URL'),

                        TextInput::make('twitter')
                            ->label('Twitter / X')
                            ->url()
                            ->placeholder('https://twitter.com/your-handle')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('Twitter/X profile URL'),

                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->url()
                            ->placeholder('https://instagram.com/your-profile')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('Instagram profile URL'),

                        TextInput::make('youtube')
                            ->label('YouTube')
                            ->url()
                            ->placeholder('https://youtube.com/your-channel')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('YouTube channel URL'),
                    ])
                    ->columns(2),
            ]);
    }
}
