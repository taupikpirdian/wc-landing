<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('User Information')
                    ->description('Basic user information and contact details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true),

                        TextInput::make('phone')
                            ->label('Phone Number')
                            ->tel()
                            ->nullable(),

                        Textarea::make('address')
                            ->label('Address')
                            ->rows(3)
                            ->nullable()
                            ->columnSpanFull(),
                    ]),

                Section::make('Account Settings')
                    ->description('Account security and access settings')
                    ->schema([
                        FileUpload::make('avatar')
                            ->label('Avatar')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('avatars')
                            ->visibility('public')
                            ->maxSize(1024) // 1MB
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                            ->helperText('JPEG, PNG, JPG, WEBP, or SVG files only, max 1MB'),

                        Toggle::make('is_active')
                            ->label('Active')
                            ->helperText('User can access the system when active')
                            ->required(),

                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->revealable()
                            ->required(fn (string $context): bool => $context === 'create')
                            ->rules(['confirmed'])
                            ->dehydrated(fn ($state) => filled($state))
                            ->helperText(fn (string $context): string =>
                                $context === 'edit' ? 'Leave empty to keep current password' : 'Required for new users'
                            )
                            ->minLength(8),

                        TextInput::make('password_confirmation')
                            ->label('Confirm Password')
                            ->password()
                            ->revealable()
                            ->dehydrated(false)
                            ->required(fn (callable $get): bool => filled($get('password'))),
                    ]),

                Section::make('System Information')
                    ->description('Read-only system fields')
                    ->schema([
                        DateTimePicker::make('email_verified_at')
                            ->label('Email Verified At')
                            ->disabled()
                            ->native(false),

                        DateTimePicker::make('last_login_at')
                            ->label('Last Login At')
                            ->disabled()
                            ->native(false),

                        TextInput::make('last_login_ip')
                            ->label('Last Login IP')
                            ->disabled(),
                    ]),
            ]);
    }
}
