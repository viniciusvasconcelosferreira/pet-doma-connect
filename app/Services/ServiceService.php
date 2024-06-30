<?php

namespace App\Services;

use App\Models\Service;

class ServiceService
{

    public function getAllServices()
    {
        return Service::all();
    }

    public function getAllServiceNames()
    {
        return Service::all()->pluck('name')->toArray();
    }

    public function getSampleServices($limit = 4)
    {
        return Service::take($limit)->get();
    }

    public function getServiceBySlug(string $slug)
    {
        return Service::where('slug', $slug)->firstOrFail();
    }
}