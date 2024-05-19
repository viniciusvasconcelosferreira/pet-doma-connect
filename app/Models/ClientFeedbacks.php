<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFeedbacks extends Model
{
    use HasFactory;

    protected $table = 'client_feedbacks';

    protected $fillable = [
        'rating',
        'title',
        'comments',
        'pet_name',
        'owner_name',
        'photo',
    ];

    protected $appends = ['full_photo'];

    public function getFullPhotoAttribute()
    {
        return 'assets/images/' . $this->attributes['photo'];
    }
}
