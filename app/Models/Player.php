<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'number', 'image', 'goal', 'match', 'position_id'];

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