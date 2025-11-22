<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'summary',
        'content',
        'image',
        'thumbnail',
        'views',
        'is_publish',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_publish' => 'boolean',
        'views' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        // Auto-generate slug when creating or updating blog
        static::saving(function ($blog) {
            if ($blog->isDirty('title')) {
                $blog->slug = Str::slug($blog->title);
            }
            if ($blog->isDirty('thumbnail')) {
                $old = $blog->getOriginal('thumbnail');
                if ($old) {
                    $path = str_starts_with($old, 'public/') ? substr($old, 7) : $old;
                    Storage::disk('public')->delete($path);
                }
            }
        });

        static::saved(function ($model) {
            if ($model->thumbnail) {
                $path = storage_path('app/public/' . $model->thumbnail);
                if (file_exists($path)) {
                    // TODO: Crop image to 880x620
                    
                }
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? Storage::disk('public')->url($this->thumbnail) : null;
    }
}
