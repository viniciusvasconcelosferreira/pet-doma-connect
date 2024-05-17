<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'features';

    protected $fillable = [
        'title',
        'subtitle',
        'features',
        'image',
    ];

    protected $appends = ['full_image', 'full_features'];

    public function getFullImageAttribute()
    {
        return 'assets/images/' . $this->attributes['image'];
    }

    public function getFullFeaturesAttribute()
    {
        $features = json_decode($this->attributes['features'], true);
        return array_map(function ($feature) {
            $feature['icon'] = asset('assets/images/icons/' . $feature['icon']);
            return $feature;
        }, $features);
    }
}
