<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Blog Content')
                    ->description('Main blog post content')
                    ->schema([
                        Select::make('category_id')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required()
                            ->placeholder('Select a category')
                            ->helperText('Choose the category for this blog post'),

                        TextInput::make('title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->placeholder('Enter blog title')
                            ->helperText('Enter an engaging title for your blog post'),

                        TextInput::make('slug')
                            ->label('URL Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->placeholder('url-friendly-slug')
                            ->helperText('Auto-generated from title (used in URLs)'),

                        Textarea::make('summary')
                            ->label('Summary')
                            ->required()
                            ->rows(3)
                            ->placeholder('Brief summary of your blog post...')
                            ->helperText('A short summary that will appear in blog listings and previews'),

                        RichEditor::make('content')
                            ->label('Content')
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
                                'attachFiles',
                            ])
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('blogs/content')
                            ->fileAttachmentsVisibility('public')
                            ->dehydrateStateUsing(function ($state) {
                                return preg_replace(
                                    '/<img(.*?)>/i',
                                    '<img$1 style="width:80%;height:auto;">',
                                    $state
                                );
                            })
                            ->helperText('Write your full blog content here'),
                    ])
                    ->columns(2),

                Section::make('Media')
                    ->description('Blog post image')
                    ->schema([
                        FileUpload::make('image')
                            ->label('Featured Image')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('blogs')
                            ->visibility('public')
                            ->maxSize(4096) // 4MB
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                            ->helperText('Upload a featured image for your blog post (max 4MB)')
                            ->columnSpanFull(),
                        FileUpload::make('thumbnail')
                            ->label('Thumbnail (880x620)')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('blogs/thumbnails')
                            ->visibility('public')
                            ->maxSize(4096)
                            ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp'])
                            ->helperText('Crop image to 880x620 for optimal display')
                            ->columnSpanFull(),
                    ]),

                Section::make('Publication')
                    ->description('Publishing settings and statistics')
                    ->schema([
                        Toggle::make('is_publish')
                            ->label('Published')
                            ->helperText('Toggle to publish or unpublish this blog post'),

                        DateTimePicker::make('published_at')
                            ->label('Published At')
                            ->required()
                            ->default(now())
                            ->helperText('Schedule when this blog post should be published'),
                    ])
                    ->columns(2),

                Section::make('SEO')
                    ->description('Search engine optimization')
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
                    ])
                    ->columns(1),
            ]);
    }
}
