<?php

namespace App\Services;

use App\Models\HomeSections;

class HomeSectionService
{
    public function getActiveSections()
    {
        return HomeSections::where('is_active', true)->get();
    }
}