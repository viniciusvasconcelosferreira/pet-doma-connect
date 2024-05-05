<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'title',
        'subtitle',
        'highlighted_services',
        'mission_title',
        'mission_subtitle',
        'mission_description',
        'client_photos',
        'active'
    ];
}
