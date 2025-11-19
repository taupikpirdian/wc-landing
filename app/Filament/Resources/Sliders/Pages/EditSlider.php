<?php

namespace App\Filament\Resources\Sliders\Pages;

use App\Filament\Resources\Sliders\SliderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditSlider extends EditRecord
{
    protected static string $resource = SliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle image cleanup when replacing with new one
        if (isset($data['image']) && $this->record->image && $data['image'] !== $this->record->image) {
            // Delete the old image file
            Storage::disk('public')->delete($this->record->image);
        }

        return $data;
    }
}
