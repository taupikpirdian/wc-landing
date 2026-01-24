<?php

namespace App\Filament\Resources\OurTeams\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;

class OurTeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Team Member Information')
                    ->description('Basic information about team member')
                    ->schema([
                        TextInput::make('name')
                            ->label('Full Name')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., John Doe')
                            ->helperText('Full name of the team member'),

                        TextInput::make('position')
                            ->label('Position/Role')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., CEO, Senior Developer, Designer')
                            ->helperText('Job title or position in the company'),
                    ])
                    ->columns(2),

                Section::make('Profile Image')
                    ->description('Team member photo')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Profile Photo')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('our-teams')
                            ->visibility('public')
                            ->maxSize(2048) // 2MB
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                            ->helperText('Upload a professional photo of the team member (max 2MB, recommended square aspect ratio)')
                            ->columnSpanFull(),
                    ]),

                Section::make('Social Media Profiles')
                    ->description('Professional social media links')
                    ->schema([
                        TextInput::make('facebook')
                            ->label('Facebook')
                            ->url()
                            ->placeholder('https://facebook.com/johndoe')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('Facebook profile URL'),

                        TextInput::make('twitter')
                            ->label('Twitter / X')
                            ->url()
                            ->placeholder('https://twitter.com/johndoe')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('Twitter/X profile URL'),

                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->url()
                            ->placeholder('https://instagram.com/johndoe')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('Instagram profile URL'),

                        TextInput::make('youtube')
                            ->label('YouTube')
                            ->url()
                            ->placeholder('https://youtube.com/@johndoe')
                            ->prefixIcon('heroicon-o-globe-alt')
                            ->helperText('YouTube channel URL'),
                    ])
                    ->columns(2),
            ]);
    }
}
