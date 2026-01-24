<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('desc')
                    ->required()
                    ->label('Description')
                    ->columnSpanFull()
                    ->floatingToolbars([
                        'paragraph' => [
                            'bold', 'italic', 'underline', 'strike', 'subscript', 'superscript',
                        ],
                        'heading' => [
                            'h1', 'h2', 'h3',
                        ],
                        'table' => [
                            'tableAddColumnBefore', 'tableAddColumnAfter', 'tableDeleteColumn',
                            'tableAddRowBefore', 'tableAddRowAfter', 'tableDeleteRow',
                            'tableMergeCells', 'tableSplitCell',
                            'tableToggleHeaderRow',
                            'tableDelete',
                        ],
                    ])
                    ->fileAttachmentsDisk('public') // disk yg dipakai
                    ->fileAttachmentsDirectory('uploads/descriptions'), // folder penyimpanan,

                Textarea::make('client_review')
                    ->rows(3)
                    ->nullable()
                    ->columnSpanFull(),

                FileUpload::make('image_cover')
                    ->label('Image Cover')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('portfolios')
                    ->visibility('public')
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/jpg', 'image/webp', 'image/svg+xml'])
                    ->helperText('JPEG, PNG, JPG, WEBP, or SVG files only, max 2MB'),
            ]);
    }
}
