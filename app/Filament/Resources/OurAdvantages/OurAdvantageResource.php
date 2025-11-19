<?php

namespace App\Filament\Resources\OurAdvantages;

use App\Filament\Resources\OurAdvantages\Pages\CreateOurAdvantage;
use App\Filament\Resources\OurAdvantages\Pages\EditOurAdvantage;
use App\Filament\Resources\OurAdvantages\Pages\ListOurAdvantages;
use App\Filament\Resources\OurAdvantages\Schemas\OurAdvantageForm;
use App\Filament\Resources\OurAdvantages\Tables\OurAdvantagesTable;
use App\Models\OurAdvantage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class OurAdvantageResource extends Resource
{
    protected static ?string $model = OurAdvantage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return OurAdvantageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OurAdvantagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOurAdvantages::route('/'),
            'create' => CreateOurAdvantage::route('/create'),
            'edit' => EditOurAdvantage::route('/{record}/edit'),
        ];
    }
}
