<?php

namespace App\Filament\Resources\OurAdvantages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

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

                        Select::make('icon')
                            ->label('Icon')
                            ->options([
                                'fa fa-trophy' => 'Trophy',
                                'fa fa-star' => 'Star',
                                'fa fa-thumbs-up' => 'Thumbs Up',
                                'fa fa-certificate' => 'Certificate',
                                'fa fa-flag' => 'Flag',
                                'fa fa-line-chart' => 'Growth (Line Chart)',
                                'fa fa-bar-chart' => 'Progress (Bar Chart)',
                                'fa fa-users' => 'Users / Clients',
                                'fa fa-briefcase' => 'Projects / Work',
                                'fa fa-rocket' => 'Launch / Fast',
                                'fa fa-check-circle' => 'Success',
                                'fa fa-globe' => 'Global Reach',
                                'fa fa-diamond' => 'Premium',
                            ])
                            ->searchable()
                            ->preload()
                            ->placeholder('Pilih ikon pencapaian')
                            ->helperText('Pilih ikon Font Awesome yang merepresentasikan pencapaian')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),

                Section::make('Display Settings')
                    ->description('Control where this advantage is displayed')
                    ->schema([
                        Toggle::make('enable_main_slider')
                            ->label('Show in Main Slider')
                            ->helperText('Enable to show this advantage in the main homepage slider')
                            ->default(false)
                            ->inline(false),

                        Toggle::make('enable_slider')
                            ->label('Show in Slider')
                            ->helperText('Enable to show this advantage in the slider section')
                            ->default(false)
                            ->inline(false),
                    ])
                    ->columns(1),
            ]);
    }
}
