<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSections extends Model
{
    use HasFactory;

    protected $table = 'home_sections';

    protected $fillable = [
        'section_name',
        'is_active',
    ];
}
