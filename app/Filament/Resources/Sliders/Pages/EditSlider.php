<?php

namespace App\Filament\Resources\Sliders\Pages;

use App\Filament\Resources\Sliders\SliderResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

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
            $old = str_starts_with($this->record->image, 'public/') ? substr($this->record->image, 7) : $this->record->image;
            Storage::disk('public')->delete($old);
        }

        // Optimize new image if present
        if (isset($data['image']) && is_string($data['image'])) {
            $path = str_starts_with($data['image'], 'public/') ? substr($data['image'], 7) : $data['image'];
            $absolute = Storage::disk('public')->path($path);
            if (is_file($absolute)) {
                ImageOptimizer::optimize($absolute);
            }
        }

        return $data;
    }
}
