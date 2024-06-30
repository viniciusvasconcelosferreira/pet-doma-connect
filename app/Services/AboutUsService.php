<?php

namespace App\Services;

use App\Models\AboutUs;

class AboutUsService
{
    public function getAboutUs()
    {
        return AboutUs::first();
    }
}