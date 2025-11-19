<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'avatar',
        'is_active',
        'last_login_at',
        'last_login_ip',
    ];

    protected static function boot()
    {
        parent::boot();

        // Delete avatar file when user is deleted
        static::deleted(function ($user) {
            if ($user->avatar) {
                // Remove "public/" prefix if exists
                $pathAvatar = str_starts_with($user->avatar, 'public/')
                    ? substr($user->avatar, 7)
                    : $user->avatar;
                Storage::disk('public')->delete($pathAvatar);
            }
        });
    }

    /**
     * Delete old avatar when updating with new one
     */
    public function deleteOldAvatar()
    {
        if ($this->isDirty('avatar')) {
            $oldAvatar = $this->getOriginal('avatar');
            if ($oldAvatar) {
                // Remove "public/" prefix if exists
                $oldAvatar = str_starts_with($oldAvatar, 'public/')
                    ? substr($oldAvatar, 7)
                    : $oldAvatar;
                Storage::disk('public')->delete($oldAvatar);
            }
        }
    }

    /**
     * Get full URL for the avatar
     */
    public function getAvatarUrlAttribute()
    {
        return $this->avatar ? Storage::disk('public')->url($this->avatar) : null;
    }

    public static function booted()
    {
        static::saved(function ($model) {
            // Optimize avatar if it exists
            if ($model->avatar) {
                $path = storage_path('app/public/' . $model->avatar);
                if (file_exists($path)) {
                    ImageOptimizer::optimize($path);
                }
            }
        });
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // Opsi 1: Izinkan semua user (untuk development)
        return true;

        // Opsi 2: Hanya user dengan role 'admin' (rekomendasi untuk production)
        // return $this->hasRole('admin');

        // Opsi 3: Email spesifik (simpel untuk start)
        // return $this->email === 'admin@example.com';
    }
}
