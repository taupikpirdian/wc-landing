<?php

namespace App\Filament\Resources\OurAdvantages\Pages;

use App\Filament\Resources\OurAdvantages\OurAdvantageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOurAdvantage extends EditRecord
{
    protected static string $resource = OurAdvantageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
