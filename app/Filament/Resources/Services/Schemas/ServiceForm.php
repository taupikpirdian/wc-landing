<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;

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

                TextArea::make('summary')
                    ->maxLength(255)
                    ->columnSpanFull()
                    ->label('Summary')
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

                Select::make('image_icon')
                    ->label('Ikon Layanan (Font Awesome)')
                    ->options([
                        // Unit Limbah
                        'fa fa-trash' => 'Limbah: Trash',
                        'fa fa-trash-o' => 'Limbah: Trash (O)',
                        'fa fa-archive' => 'Limbah: Dumpster (Alt)',
                        'fa fa-recycle' => 'Limbah: Recycle',
                        'fa fa-truck' => 'Limbah: Truck',
                        'fa fa-exclamation-triangle' => 'Limbah: Biohazard (Alt)',
                        // Unit WC / Septic Tank
                        'fa fa-shower' => 'WC: Toilet/Shower (Alt)',
                        'fa fa-users' => 'WC: Restroom (Alt)',
                        'fa fa-tint' => 'WC: Droplet/Tint',
                    ])
                    ->searchable()
                    ->preload()
                    ->nullable()
                    ->helperText('Pilih ikon Font Awesome 4.7 untuk ditampilkan pada layanan'),

                FileUpload::make('image_cover')
                    ->label('Image Cover')
                    ->required(fn (string $context): bool => $context === 'create')
                    ->image()
                    ->imageEditor()
                    ->disk('public')
                    ->directory('services')
                    ->visibility('public')
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->helperText('JPEG or PNG files only, max 2MB'),
            ]);
    }
}
