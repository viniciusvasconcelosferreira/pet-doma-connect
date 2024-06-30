<?php

namespace App\Http\Controllers;

use App\Services\AboutUsService;
use App\Services\BlogPostService;
use App\Services\ClientFeedbackService;
use App\Services\FeatureService;
use App\Services\GoalService;
use App\Services\HeroSectionService;
use App\Services\HomeSectionService;
use App\Services\ServiceService;
use App\Services\TeamService;

class HomeController extends Controller
{

    protected $homeSectionService;
    protected $heroSectionService;
    protected $aboutUsService;
    protected $serviceService;
    protected $featureService;
    protected $goalService;
    protected $teamService;
    protected $clientFeedbackService;
    protected $blogPostService;

    public function __construct(
        HomeSectionService $homeSectionService,
        HeroSectionService $heroSectionService,
        AboutUsService $aboutUsService,
        ServiceService $serviceService,
        FeatureService $featureService,
        GoalService $goalService,
        TeamService $teamService,
        ClientFeedbackService $clientFeedbackService,
        BlogPostService $blogPostService
    ) {
        $this->homeSectionService = $homeSectionService;
        $this->heroSectionService = $heroSectionService;
        $this->aboutUsService = $aboutUsService;
        $this->serviceService = $serviceService;
        $this->featureService = $featureService;
        $this->goalService = $goalService;
        $this->teamService = $teamService;
        $this->clientFeedbackService = $clientFeedbackService;
        $this->blogPostService = $blogPostService;
    }

    public function index()
    {
        $active_sessions = $this->homeSectionService->getActiveSections();
        $hero_content = $this->heroSectionService->getHeroContent();
        $about_us = $this->aboutUsService->getAboutUs();
        $sample_services = $this->serviceService->getSampleServices();
        $features = $this->featureService->getFeatures();
        $goals = $this->goalService->getGoals();
        $team = $this->teamService->getTeam();
        $feedbacks = $this->clientFeedbackService->getClientFeedbacks();
        $all_services = $this->serviceService->getAllServiceNames();
        $most_recent_posts = $this->blogPostService->getMostRecentPosts();

        return view('frontend.home.index',
            compact('active_sessions', 'hero_content', 'about_us', 'sample_services', 'features', 'goals', 'team',
                'feedbacks', 'all_services', 'most_recent_posts'
            ));
    }
}
