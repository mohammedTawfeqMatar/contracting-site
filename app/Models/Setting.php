<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'key',
        'value',
        'type',
        'description',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'value' => 'string', // Default, but can be handled dynamically
    ];

    /**
     * Get setting value by key.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function getValue(string $key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        if (!$setting) {
            return $default;
        }

        return $setting->parseValue();
    }

    /**
     * Set setting value by key.
     *
     * @param string $key
     * @param mixed $value
     * @param string|null $type
     * @return self
     */
    public static function setValue(string $key, $value, ?string $type = 'text')
    {
        return self::updateOrCreate(
            ['key' => $key],
            [
                'value' => is_array($value) ? json_encode($value) : $value,
                'type' => $type
            ]
        );
    }

    /**
     * Parse the value based on the type.
     *
     * @return mixed
     */
    public function parseValue()
    {
        switch ($this->type) {
            case 'json':
                return json_decode($this->value, true);
            case 'boolean':
                return filter_var($this->value, FILTER_VALIDATE_BOOLEAN);
            case 'integer':
                return (int) $this->value;
            case 'image':
                return $this->value ? asset('storage/' . $this->value) : null;
            default:
                return $this->value;
        }
    }

    /**
     * Scope a query to only include settings of a certain type.
     */
    public function scopeOfType($query, string $type)
    {
        return $query->where('type', $type);
    }
}
