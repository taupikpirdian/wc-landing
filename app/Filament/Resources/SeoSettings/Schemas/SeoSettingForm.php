<?php

namespace App\Filament\Resources\SeoSettings\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class SeoSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Basic Information')
                    ->description('Basic page information for SEO')
                    ->schema([
                        Select::make('page')
                            ->label('Page Name')
                            ->required()
                            ->options(function (callable $get) {
                                // Get all existing pages from database
                                $existingPages = \App\Models\SeoSetting::pluck('page')->toArray();

                                // Get current record ID if editing
                                $recordId = $get('id');

                                // All available pages
                                $allPages = [
                                    'home' => 'Home',
                                    'services' => 'Services',
                                    'portfolio' => 'Portfolio',
                                    'blog' => 'Blog',
                                    'faq' => 'FAQ',
                                    'about-us' => 'About Us',
                                    'contact-us' => 'Contact Us',
                                    'blog-detail' => 'Blog Detail',
                                    'portfolio-detail' => 'Portfolio Detail',
                                    'service-detail' => 'Service Detail',
                                ];

                                // Filter out pages that already exist in database
                                // But allow current record's page for editing
                                $currentPage = $get('page');
                                $availablePages = collect($allPages)->reject(function ($label, $value) use ($existingPages, $currentPage) {
                                    return in_array($value, $existingPages) && $currentPage !== $value;
                                });

                                return $availablePages->toArray();
                            })
                            ->placeholder('Select a page')
                            ->helperText('Choose the page for these SEO settings (pages that already have SEO settings are hidden)'),

                        TextInput::make('title')
                            ->label('Page Title')
                            ->maxLength(255)
                            ->placeholder('Main title displayed in browser tab')
                            ->helperText('If empty, meta title will be used'),
                    ]),

                Section::make('Meta Tags')
                    ->description('Search engine optimization metadata')
                    ->schema([
                        TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->maxLength(60)
                            ->placeholder('SEO title (60 chars max)')
                            ->helperText('Title shown in search results'),

                        Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->maxLength(160)
                            ->rows(3)
                            ->placeholder('SEO description (160 chars max)')
                            ->helperText('Description shown in search results'),

                        Textarea::make('meta_keywords')
                            ->label('Meta Keywords')
                            ->rows(2)
                            ->placeholder('keyword1, keyword2, keyword3')
                            ->helperText('Comma-separated keywords for SEO'),
                    ]),

                Section::make('Open Graph')
                    ->description('Social media sharing optimization')
                    ->schema([
                        TextInput::make('og_title')
                            ->label('OG Title')
                            ->maxLength(255)
                            ->placeholder('Social media title')
                            ->helperText('Title when shared on social media'),

                        Textarea::make('og_description')
                            ->label('OG Description')
                            ->rows(3)
                            ->placeholder('Social media description')
                            ->helperText('Description when shared on social media'),

                        FileUpload::make('og_image')
                            ->label('OG Image')
                            ->image()
                            ->imageEditor()
                            ->directory('public/seo-images')
                            ->visibility('public')
                            ->maxSize(5120) // 5MB increased to avoid size detection issues
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                            ->helperText('Image shown when shared on social media (5MB max)'),
                    ]),

                Section::make('Technical SEO')
                    ->description('Technical SEO settings')
                    ->schema([
                        TextInput::make('canonical_url')
                            ->label('Canonical URL')
                            ->url()
                            ->placeholder('https://example.com/page')
                            ->helperText('Preferred URL for search engines'),

                        Textarea::make('json_ld')
                            ->label('JSON-LD')
                            ->rows(5)
                            ->placeholder('{"@context":"https://schema.org","@type":"WebPage",...}')
                            ->helperText('Structured data for search engines (JSON-LD format)')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
