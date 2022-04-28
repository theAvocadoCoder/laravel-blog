<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'featured_image',
        'content',
        'is_published',
    ];

    /**
     * Get the user that owns the post
     */

    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category the post belongs to 
     */

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the tags for the post
     */

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
