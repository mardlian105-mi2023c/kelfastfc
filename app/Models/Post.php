<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'title',       // required field
        'content',    // required field
        'post_category_id', // required field that must exist in post_categories table
        'image',      // nullable image field
    ];
    
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }
}