<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('label')
                    ->maxLength(255)
                    ->nullable(),

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

                FileUpload::make('image_icon')
                    ->label('Image Icon')
                    ->image()
                    ->imageEditor()
                    ->directory('public/services')
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->helperText('JPEG or PNG files only, max 2MB'),

                FileUpload::make('image_cover')
                    ->label('Image Cover')
                    ->required(fn (string $context): bool => $context === 'create')
                    ->image()
                    ->imageEditor()
                    ->directory('public/services')
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->helperText('JPEG or PNG files only, max 2MB'),
            ]);
    }
}
