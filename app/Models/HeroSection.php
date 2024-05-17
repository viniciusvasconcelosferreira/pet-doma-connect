<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $table = 'hero_sections';

    protected $fillable = [
        'title',
        'subtitle',
        'featured_photo',
        'sub_featured_photos',
        'name_button',
        'link_button',
        'satisfied_customers'
    ];

    protected $appends = ['full_featured_photo', 'full_sub_featured_photos'];

    public function getFullFeaturedPhotoAttribute()
    {
        return 'assets/images/' . $this->attributes['featured_photo'];
    }

    public function getFullSubFeaturedPhotosAttribute()
    {
        $subFeaturedPhotos = json_decode($this->attributes['sub_featured_photos']);
        return array_map(function ($photo) {
            return 'assets/images/' . $photo;
        }, $subFeaturedPhotos);
    }
}
