<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class Service extends Model
{
    protected $fillable = ['title', 'slug', 'label', 'desc', 'image_icon', 'image_cover', 'summary'];

    protected static function boot()
    {
        parent::boot();

        // Delete image files when service is deleted
        static::deleted(function ($service) {
            if ($service->image_icon) {
                // Remove "public/" prefix if exists
                $pathImageIcon = str_starts_with($service->image_icon, 'public/')
                    ? substr($service->image_icon, 7)
                    : $service->image_icon;
                Storage::disk('public')->delete($pathImageIcon);
            }
            if ($service->image_cover) {
                // Remove "public/" prefix if exists
                $pathImageCover = str_starts_with($service->image_cover, 'public/')
                    ? substr($service->image_cover, 7)
                    : $service->image_cover;
                Storage::disk('public')->delete($pathImageCover);
            }
        });

        // Generate slug from title
        static::saving(function ($service) {
            if ($service->isDirty('title')) {
                $service->slug = Str::slug($service->title);
            }
        });
    }

    public static function booted()
    {
        static::saved(function ($model) {
            // Optimize image_icon if it exists
            if ($model->image_icon) {
                $path = storage_path('app/public/' . $model->image_icon);
                if (file_exists($path)) {
                    ImageOptimizer::optimize($path);
                }
            }

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
     * Delete old images when updating with new ones
     */
    public function deleteOldImages()
    {
        if ($this->isDirty('image_icon')) {
            $oldImageIcon = $this->getOriginal('image_icon');
            if ($oldImageIcon) {
                $isFa = str_starts_with($oldImageIcon, 'fa ') || str_starts_with($oldImageIcon, 'fa-') || str_contains($oldImageIcon, ' fa ');
                if (!$isFa) {
                    $oldImageIcon = str_starts_with($oldImageIcon, 'public/')
                        ? substr($oldImageIcon, 7)
                        : $oldImageIcon;
                    Storage::disk('public')->delete($oldImageIcon);
                }
            }
        }

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
     * Get full URL for the image icon
     */
    public function getImageIconUrlAttribute()
    {
        if (!$this->image_icon) return null;
        $isFa = str_starts_with($this->image_icon, 'fa ') || str_starts_with($this->image_icon, 'fa-') || str_contains($this->image_icon, ' fa ');
        if ($isFa) return null;
        return Storage::disk('public')->url($this->image_icon);
    }

    public function getIconClassAttribute()
    {
        if (!$this->image_icon) return null;
        $isFa = str_starts_with($this->image_icon, 'fa ') || str_starts_with($this->image_icon, 'fa-') || str_contains($this->image_icon, ' fa ');
        return $isFa ? $this->image_icon : null;
    }

    /**
     * Get full URL for the image cover
     */
    public function getImageCoverUrlAttribute()
    {
        return $this->image_cover ? Storage::disk('public')->url($this->image_cover) : null;
    }
}
