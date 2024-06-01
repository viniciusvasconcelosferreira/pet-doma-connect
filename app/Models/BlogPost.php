<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class BlogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'main_tag',
        'title',
        'thumbnail',
        'featured_image',
        'content',
        'resume',
        'secondary_tags',
        'slug',
        'is_active',
        'posted_at',
    ];

    protected $appends = ['full_featured_image', 'full_thumbnail'];

    public function getFullFeaturedImageAttribute()
    {
        return 'assets/images/'.$this->attributes['featured_image'];
    }

    public function getFullThumbnailAttribute()
    {
        return 'assets/images/'.$this->attributes['thumbnail'];
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
