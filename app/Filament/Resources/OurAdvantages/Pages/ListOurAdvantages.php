<?php

namespace App\Filament\Resources\OurAdvantages\Pages;

use App\Filament\Resources\OurAdvantages\OurAdvantageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOurAdvantages extends ListRecords
{
    protected static string $resource = OurAdvantageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
