<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    use HasFactory;

    //  مهم: ربط الموديل بالجدول الجديد
    protected $table = 'job_posts';

    protected $fillable = [
        'title',
        'slug',
        'location',
        'type',
        'experience',
        'qualification',
        'description',
        'requirements',
        'skills',
        'is_active',
        'closing_date',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'requirements' => 'array',
        'skills' => 'array',
        'closing_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($job) {

            //  توليد slug ذكي + منع التكرار
            if (empty($job->slug)) {
                $slug = Str::slug($job->title);

                $count = self::where('slug', 'LIKE', "{$slug}%")->count();

                $job->slug = $count ? "{$slug}-{$count}" : $slug;
            }
        });
    }

    // 🔥 Scope للوظائف النشطة
    public function scopeActive($query)
    {
        return $query->where('is_active', true)
            ->where(function ($q) {
                $q->whereNull('closing_date')
                  ->orWhere('closing_date', '>=', now());
            });
    }

    // Scope جاهز للعرض في الموقع
    public function scopePublished($query)
    {
        return $query->active()->latest();
    }
}