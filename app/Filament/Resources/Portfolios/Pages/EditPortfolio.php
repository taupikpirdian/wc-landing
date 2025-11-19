<?php

namespace App\Filament\Resources\Portfolios\Pages;

use App\Filament\Resources\Portfolios\PortfolioResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditPortfolio extends EditRecord
{
    protected static string $resource = PortfolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle image cleanup when replacing with new one
        if (isset($data['image_cover']) && $this->record->image_cover && $data['image_cover'] !== $this->record->image_cover) {
            // Delete the old image cover file
            Storage::disk('public')->delete($this->record->image_cover);
        }

        return $data;
    }
}
