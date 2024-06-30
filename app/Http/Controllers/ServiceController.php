<?php

namespace App\Http\Controllers;

use App\Models\ClientFeedbacks;
use App\Models\Goal;
use App\Models\Service;
use App\Models\Team;
use App\Services\ClientFeedbackService;
use App\Services\GoalService;
use App\Services\ServiceService;
use App\Services\TeamService;

class ServiceController extends Controller
{
    protected $serviceService;
    protected $teamService;
    protected $goalService;
    protected $clientFeedbackService;

    public function __construct(
        ServiceService $serviceService,
        TeamService $teamService,
        GoalService $goalService,
        ClientFeedbackService $clientFeedbackService
    ) {
        $this->serviceService = $serviceService;
        $this->teamService = $teamService;
        $this->goalService = $goalService;
        $this->clientFeedbackService = $clientFeedbackService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = $this->serviceService->getAllServices();
        $team = $this->teamService->getTeam();
        $goals = $this->goalService->getGoals();
        $feedbacks = $this->clientFeedbackService->getClientFeedbacks();
        $title = 'Serviços | PET D.O.M.A';

        return view('frontend.services.index', compact('services', 'team', 'goals', 'feedbacks', 'title'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $service = $this->serviceService->getServiceBySlug($slug);

        return view('frontend.services.show', compact('service'));
    }
}
