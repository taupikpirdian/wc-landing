<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class Portfolio extends Model
{
    protected $fillable = ['title', 'slug', 'desc', 'client_review', 'image_cover'];

    protected static function boot()
    {
        parent::boot();

        // Delete image file when portfolio is deleted
        static::deleted(function ($portfolio) {
            if ($portfolio->image_cover) {
                // Remove "public/" prefix if exists
                $pathImageCover = str_starts_with($portfolio->image_cover, 'public/')
                    ? substr($portfolio->image_cover, 7)
                    : $portfolio->image_cover;
                Storage::disk('public')->delete($pathImageCover);
            }
        });

        // Generate slug from title
        static::saving(function ($portfolio) {
            if ($portfolio->isDirty('title')) {
                $portfolio->slug = Str::slug($portfolio->title);
            }
        });
    }

    public static function booted()
    {
        static::saved(function ($model) {
            // Optimize image_cover if it exists
            if ($model->image_cover) {
                $path = storage_path('app/public/' . $model->image_cover);
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
        if ($this->isDirty('image_cover')) {
            $oldImageCover = $this->getOriginal('image_cover');
            if ($oldImageCover) {
                // Remove "public/" prefix if exists
                $oldImageCover = str_starts_with($oldImageCover, 'public/')
                    ? substr($oldImageCover, 7)
                    : $oldImageCover;
                Storage::disk('public')->delete($oldImageCover);
            }
        }
    }

    /**
     * Get full URL for the image cover
     */
    public function getImageCoverUrlAttribute()
    {
        return $this->image_cover ? Storage::disk('public')->url($this->image_cover) : null;
    }
}
