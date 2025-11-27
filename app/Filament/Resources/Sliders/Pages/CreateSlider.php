<?php

namespace App\Filament\Resources\Sliders\Pages;

use App\Filament\Resources\Sliders\SliderResource;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class CreateSlider extends CreateRecord
{
    protected static string $resource = SliderResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['image']) && is_string($data['image'])) {
            if (Str::startsWith($data['image'], 'public/')) {
                $data['image'] = substr($data['image'], 7);
            }

            $absolute = Storage::disk('public')->path($data['image']);
            if (is_file($absolute)) {
                ImageOptimizer::optimize($absolute);
            }
        }

        return $data;
    }
}
