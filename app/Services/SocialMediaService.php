<?php

namespace App\Services;

use App\Models\SocialMedia;
use Illuminate\Support\Str;

class SocialMediaService
{
    public function getSocialMedia()
    {
        return SocialMedia::first();
    }
}
