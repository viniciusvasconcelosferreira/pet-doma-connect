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
}
