<?php

namespace App\Filament\Resources\Sliders\Pages;

use App\Filament\Resources\Sliders\SliderResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateSlider extends CreateRecord
{
    protected static string $resource = SliderResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['image']) && is_string($data['image'])) {
            if (!Str::startsWith($data['image'], 'public/')) {
                $data['image'] = 'public/' . ltrim($data['image'], '/');
            }
        }

        return $data;
    }
}
