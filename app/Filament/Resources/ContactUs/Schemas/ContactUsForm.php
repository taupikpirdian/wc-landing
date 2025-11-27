<?php

namespace App\Filament\Resources\ContactUs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\RichEditor;

class ContactUsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Information')
                    ->description('Basic contact information')
                    ->schema([
                        Textarea::make('mail')
                            ->label('Email')
                            ->required()
                            ->rows(2)
                            ->placeholder('contact@example.com')
                            ->helperText('Required email address'),

                        Textarea::make('location')
                            ->label('Location')
                            ->rows(3)
                            ->placeholder('123 Main St, City, Country')
                            ->helperText('Physical address'),

                        TextInput::make('phone')
                            ->label('Phone')
                            ->tel()
                            ->placeholder('+62 21 1234 5678')
                            ->helperText('Landline number'),

                        TextInput::make('mobile')
                            ->label('Mobile')
                            ->tel()
                            ->placeholder('+62 812 3456 7890')
                            ->helperText('Mobile number'),
                    ])
                    ->columns(2),

                Section::make('Location Coordinates')
                    ->description('GPS coordinates for mapping')
                    ->schema([
                        TextInput::make('latitude')
                            ->label('Latitude')
                            ->step(0.00000001)
                            ->placeholder('-6.200000')
                            ->helperText('Latitude coordinate'),

                        TextInput::make('longitude')
                            ->label('Longitude')
                            ->step(0.00000001)
                            ->placeholder('106.816666')
                            ->helperText('Longitude coordinate'),
                    ])
                    ->columns(2),

                Section::make('Working Hours')
                    ->description('Business working hours and schedule')
                    ->schema([
                        RichEditor::make('working_day_summary')
                            ->label('Working Day Summary')
                            ->placeholder('Mon-Fri: 09:00-17:00')
                            ->helperText('Summary of working hours'),

                        Repeater::make('workingTimes')
                            ->label('Working Hours Details')
                            ->relationship()
                            ->schema([
                                Select::make('day')
                                    ->label('Day')
                                    ->options([
                                        'Monday' => 'Monday',
                                        'Tuesday' => 'Tuesday',
                                        'Wednesday' => 'Wednesday',
                                        'Thursday' => 'Thursday',
                                        'Friday' => 'Friday',
                                        'Saturday' => 'Saturday',
                                        'Sunday' => 'Sunday',
                                    ])
                                    ->required()
                                    ->columnSpan(2),

                                TimePicker::make('open_time')
                                    ->label('Open Time')
                                    ->required()
                                    ->withoutSeconds()
                                    ->columnSpan(1),

                                TimePicker::make('close_time')
                                    ->label('Close Time')
                                    ->required()
                                    ->withoutSeconds()
                                    ->columnSpan(1),

                                Checkbox::make('is_closed')
                                    ->label('Is Closed')
                                    ->default(false)
                                    ->columnSpan(2),
                            ])
                            ->columns(6)
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['day'] ?? null)
                            ->collapsible()
                            ->addActionLabel('Add Working Day')
                            ->reorderableWithButtons(false)
                            ->collapsible()
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
            ]);
    }
}
