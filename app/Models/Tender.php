<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tender extends Model
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
        'work_type',
        'location',
        'closing_date',
        'status',
        'is_published',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'closing_date' => 'datetime',
        'is_published' => 'boolean',
    ];

    /**
     * Automatically generate slug if not provided.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($tender) {
            if (empty($tender->slug)) {
                $tender->slug = Str::slug($tender->title);
            }
        });
    }

    /**
     * Scope a query to only include published tenders.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    /**
     * Scope a query to only include open tenders.
     */
    public function scopeOpen($query)
    {
        return $query->where('status', 'open')
                     ->where('closing_date', '>=', now());
    }

    /**
     * Scope a query to filter tenders by work type.
     */
    public function scopeOfWorkType($query, string $type)
    {
        return $query->where('work_type', $type);
    }

    /**
     * Check if the tender is still open for submission.
     *
     * @return bool
     */
    public function isOpen()
    {
        return $this->status === 'open' && $this->closing_date->isFuture();
    }

    /**
     * Get days remaining until the closing date.
     *
     * @return int
     */
    public function getDaysRemainingAttribute()
    {
        if ($this->closing_date->isPast()) {
            return 0;
        }

        return now()->diffInDays($this->closing_date);
    }

    public function project() {
    return $this->belongsTo(Project::class);
}
}
