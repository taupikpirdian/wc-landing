<?php

namespace App\Filament\Resources\AboutUs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class AboutUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('About Information')
                    ->description('Basic information about your company')
                    ->schema([
                        TextInput::make('title')
                            ->label('Company Title')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('e.g., About Our Company')
                            ->helperText('Main title for the about section'),

                        Textarea::make('desc')
                            ->label('Description')
                            ->required()
                            ->rows(4)
                            ->placeholder('Brief description of your company...')
                            ->helperText('A concise description of your company'),

                        TextInput::make('since')
                            ->label('Established Since')
                            ->placeholder('e.g., 2020, 2015')
                            ->helperText('Year when your company was established'),
                    ])
                    ->columns(2),

                Section::make('About Image')
                    ->description('Image for about section')
                    ->schema([
                        FileUpload::make('image_testimony')
                            ->label('About Image')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('about-us')
                            ->visibility('public')
                            ->maxSize(2048) // 2MB
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                            ->helperText('Upload an image for the testimonials section (max 2MB)')
                            ->columnSpanFull(),
                    ]),

                Section::make('Vision & Mission')
                    ->description('Company vision and mission statements')
                    ->schema([
                        RichEditor::make('vission')
                            ->label('Vision')
                            ->required()
                            ->columnSpanFull()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->helperText('Write your company vision statement'),

                        Repeater::make('mission')
                            ->label('Mission Statements')
                            ->schema([
                                RichEditor::make('mission_point')
                                    ->label('Mission Point')
                                    ->required()
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'bulletList',
                                        'link',
                                        'orderedList',
                                    ])
                                    ->helperText('Enter a mission point'),
                            ])
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => substr(strip_tags($state['mission_point'] ?? ''), 0, 30) . '...')
                            ->collapsible()
                            ->addActionLabel('Add Mission Point')
                            ->reorderableWithButtons(false)
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
            ]);
    }
}
