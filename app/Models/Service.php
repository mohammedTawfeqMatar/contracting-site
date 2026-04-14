<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'icon',           // أيقونة الخدمة (مثلاً fas fa-city)
        'overview',       // نظرة عامة مفصلة
        'achievements',   // إنجازات (JSON قائمة)
        'is_published',
        'sort_order',     // ترتيب الظهور
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'achievements' => 'array',
        'sort_order' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true)->orderBy('sort_order', 'asc');
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
public function projects() {
    return $this->hasMany(Project::class);
}
public function news() {
    return $this->morphMany(News::class, 'newsable');
}
}
