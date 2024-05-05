<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Feature;
use App\Models\Goal;
use App\Models\HeroSection;
use App\Models\HomeSections;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $active_sessions = HomeSections::where('is_active', true)->get();
        $hero_content = HeroSection::first();
        $about_us = AboutUs::first();
        $services = Service::take(4)->get();
        $features = Feature::first();
        $goals = Goal::first();
        return view('frontend.home.index', compact('active_sessions', 'hero_content', 'about_us', 'services', 'features', 'goals'));
    }
}
