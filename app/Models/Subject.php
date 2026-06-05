<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['name', 'available_from'];

    protected $casts = [
        'available_from' => 'datetime',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    /**
     * A subject is available when it has no lock date, or the lock date has passed.
     */
    public function scopeAvailable($query)
    {
        return $query->where(function ($q) {
            $q->whereNull('available_from')
              ->orWhere('available_from', '<=', now());
        });
    }

    public function getIsAvailableAttribute(): bool
    {
        return $this->available_from === null || $this->available_from->isPast();
    }
}
