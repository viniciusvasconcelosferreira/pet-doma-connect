<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\BlogPost;
use App\Models\ClientFeedbacks;
use App\Models\ContactInformation;
use App\Models\Feature;
use App\Models\Goal;
use App\Models\HeroSection;
use App\Models\HomeSections;
use App\Models\Service;
use App\Models\SocialMedia;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        $active_sessions = HomeSections::where('is_active', true)->get();
        $hero_content = HeroSection::first();
        $about_us = AboutUs::first();
        $sample_services = Service::take(4)->get();
        $features = Feature::first();
        $goals = Goal::first();
        $team = Team::take(4)->get();
        $feedbacks = ClientFeedbacks::all();
        $all_services = Service::all()->pluck('name')->toArray();
        $most_recent_posts = BlogPost::select('slug', 'main_tag', 'title', 'thumbnail',
            'posted_at')->orderBy('created_at', 'desc')->take(3)->get();

        return view('frontend.home.index', compact('active_sessions', 'hero_content',
            'about_us', 'sample_services', 'features', 'goals', 'team', 'feedbacks',
            'all_services', 'most_recent_posts'));
    }
}
