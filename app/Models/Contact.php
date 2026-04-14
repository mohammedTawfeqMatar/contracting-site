<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'phone',
        'email',
        'request_type',
        'service_requested',
        'cv_file',
        'message',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'string',
    ];

    /**
     * Scope a query to only include pending contacts.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope a query to only include career-related requests.
     */
    public function scopeCareers($query)
    {
        return $query->where('request_type', 'career');
    }

    /**
     * Scope a query to only include service-related requests.
     */
    public function scopeServiceRequests($query)
    {
        return $query->where('request_type', 'service');
    }

    /**
     * Get the full URL for the CV file.
     *
     * @return string|null
     */
    public function getCvFileUrlAttribute()
    {
        return $this->cv_file ? Storage::url($this->cv_file) : null;
    }

    /**
     * Mark the contact request as in progress.
     *
     * @return bool
     */
    public function markAsInProgress()
    {
        return $this->update(['status' => 'in_progress']);
    }

    /**
     * Mark the contact request as completed.
     *
     * @return bool
     */
    public function markAsCompleted()
    {
        return $this->update(['status' => 'completed']);
    }

    /**
     * Check if the request is a career application.
     *
     * @return bool
     */
    public function isCareerApplication()
    {
        return $this->request_type === 'career';
    }
}
