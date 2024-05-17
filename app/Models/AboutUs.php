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

    protected $appends = ['full_client_photos'];

    public function getFullClientPhotosAttribute()
    {
        $clientPhotos = json_decode($this->attributes['client_photos']);
        return array_map(function ($photo) {
            return 'assets/images/' . $photo;
        }, $clientPhotos);
    }
}
