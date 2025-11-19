<?php

namespace App\Filament\Resources\Services\Pages;

use App\Filament\Resources\Services\ServiceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditService extends EditRecord
{
    protected static string $resource = ServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Handle image cleanup when replacing with new ones
        if (isset($data['image_icon']) && $this->record->image_icon && $data['image_icon'] !== $this->record->image_icon) {
            // Delete the old image icon file
            Storage::disk('public')->delete($this->record->image_icon);
        }

        if (isset($data['image_cover']) && $this->record->image_cover && $data['image_cover'] !== $this->record->image_cover) {
            // Delete the old image cover file
            Storage::disk('public')->delete($this->record->image_cover);
        }

        return $data;
    }
}
