<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Player extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['name', 'number', 'image', 'goal', 'match', 'position_id'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('player')
            ->logOnly(['name', 'number', 'image', 'goal', 'match', 'position_id'])
            ->logOnlyDirty()
            ->setDescriptionForEvent(fn(string $eventName) => "Player telah di{$eventName}");
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function getPerformanceAttribute()
    {
        if ($this->match > 0) {
            return round(($this->goal / $this->match) * 100, 2);
        }
        return 0;
    }
}