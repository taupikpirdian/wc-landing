<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class Slider extends Model
{
    protected $fillable = ['title', 'desc', 'image'];

    protected static function boot()
    {
        parent::boot();

        // Delete image file when slider is deleted
        static::deleted(function ($slider) {
            if ($slider->image) {
                // Remove "public/" prefix if exists
                $pathImage = str_starts_with($slider->image, 'public/')
                    ? substr($slider->image, 7)
                    : $slider->image;
                Storage::disk('public')->delete($pathImage);
            }
        });
    }

    public static function booted()
    {
        static::saved(function ($model) {
            if ($model->image) {
                $path = storage_path('app/public/' . $model->image);

                if (file_exists($path)) {
                    ImageOptimizer::optimize($path);
                }
            }
        });
    }

    /**
     * Delete old image when updating with new one
     */
    public function deleteOldImage()
    {
        if ($this->isDirty('image')) {

            $oldImage = $this->getOriginal('image');

            if ($oldImage) {

                // Remove "public/" prefix if exists
                $oldImage = str_starts_with($oldImage, 'public/')
                    ? substr($oldImage, 7)
                    : $oldImage;

                Storage::disk('public')->delete($oldImage);
            }
        }
    }


    /**
     * Get full URL for the image
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? Storage::disk('public')->url($this->image) : null;
    }
}
