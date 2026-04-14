<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'category',
        'location',
        'area',              // مساحة المشروع
        'status_text',       // حالة المشروع (مكتمل، قيد التنفيذ)
        'completion_date',   // تاريخ الإنجاز
        'challenges',        // التحديات (نص طويل)
        'solutions',         // الحلول (نص طويل)
        'achievements',      // الإنجازات (JSON قائمة)
        'gallery',           // معرض الصور (JSON قائمة روابط)
        'is_published',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_published' => 'boolean',
        'achievements' => 'array',
        'gallery' => 'array',
        'completion_date' => 'date',
    ];

    /**
     * Automatically generate slug if not provided.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    /**
     * Scope a query to only include published projects.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Get the full URL for the main image.
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function news()
    {
        return $this->morphMany(News::class, 'newsable');
    }
    public function tenders()
    {
        return $this->hasMany(Tender::class);
    }
}
