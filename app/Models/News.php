<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
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
        'content',
        'image',
        'category',
        'is_published',
        'published_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Automatically generate slug if not provided.
     */
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($news) {
            if (empty($news->slug)) {
                $news->slug = Str::slug($news->title);
            }

            if ($news->is_published && is_null($news->published_at)) {
                $news->published_at = now();
            }
        });
    }

    /**
     * Scope a query to only include published news.
     */
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
                     ->where('published_at', '<=', now());
    }

    /**
     * Scope a query to filter news by category.
     */
    public function scopeInCategory($query, string $category)
    {
        return $query->where('category', $category);
    }

    /**
     * Get the full URL for the image.
     *
     * @return string|null
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    /**
     * Get a short excerpt of the content.
     *
     * @param int $limit
     * @return string
     */
    public function getExcerpt(int $limit = 150)
    {
        return Str::limit(strip_tags($this->content), $limit);
    }

    public function newsable() {
    return $this->morphTo();
}
}
