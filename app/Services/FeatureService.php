<?php

namespace App\Services;

use App\Models\Feature;

class FeatureService
{
    public function getFeatures()
    {
        return Feature::first();
    }
}