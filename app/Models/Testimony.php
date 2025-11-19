<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class Testimony extends Model
{
    protected $fillable = ['name', 'position', 'desc', 'image'];

    protected static function boot()
    {
        parent::boot();

        // Delete image file when testimony is deleted
        static::deleted(function ($testimony) {
            if ($testimony->image) {
                // Remove "public/" prefix if exists
                $pathImage = str_starts_with($testimony->image, 'public/')
                    ? substr($testimony->image, 7)
                    : $testimony->image;
                Storage::disk('public')->delete($pathImage);
            }
        });
    }

    public static function booted()
    {
        static::saved(function ($model) {
            // Optimize image if it exists
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
