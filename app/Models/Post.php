<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Post extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'title',
        'content',
        'post_category_id',
        'image',
    ];

    // Relasi ke kategori
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    /**
     * Konfigurasi log aktivitas
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('post')
            ->logOnly(['title', 'content', 'post_category_id', 'image'])
            ->logOnlyDirty() // hanya log jika ada perubahan
            ->setDescriptionForEvent(fn(string $eventName) => "Post telah di{$eventName}");
    }
}