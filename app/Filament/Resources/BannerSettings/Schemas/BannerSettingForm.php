<?php

namespace App\Filament\Resources\BannerSettings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;

class BannerSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Banner Setting')
                    ->description('Konfigurasi banner untuk halaman tertentu')
                    ->schema([
                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),

                        Select::make('page')
                            ->label('Page')
                            ->options([
                                'tentang-kami' => 'Tentang Kami',
                                'layanan-kami' => 'Layanan Kami',
                                'area-layanan' => 'Area Layanan',
                                'portfolio' => 'Portfolio',
                                'blog' => 'Blog',
                                'faq' => 'FAQ',
                                'hubungi-kami' => 'Hubungi Kami',
                            ])
                            ->required()
                            ->searchable()
                            ->preload()
                            ->placeholder('Pilih halaman'),

                        FileUpload::make('image')
                            ->label('Banner Image')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('banner-settings')
                            ->visibility('public')
                            ->maxSize(4096)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                            ->helperText('Ukuran disarankan 1920x600 (maks 4MB). Format: JPG, PNG, WEBP, SVG.')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
            ]);
    }
}
