<?php

namespace App\Services;

use App\Models\HeroSection;

class HeroSectionService
{
    public function getHeroContent()
    {
        return HeroSection::first();
    }
}