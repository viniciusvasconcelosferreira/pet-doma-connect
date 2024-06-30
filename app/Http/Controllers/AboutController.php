<?php

namespace App\Http\Controllers;

use App\Services\ClientFeedbackService;
use App\Services\TeamService;

class AboutController extends Controller
{
    protected $teamService;
    protected $clientFeedbackService;

    public function __construct(
        TeamService $teamService,
        ClientFeedbackService $clientFeedbackService
    ) {
        $this->teamService = $teamService;
        $this->clientFeedbackService = $clientFeedbackService;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = $this->teamService->getTeam();
        $feedbacks = $this->clientFeedbackService->getClientFeedbacks();
        $title = 'Sobre Nós | PET D.O.M.A';
        return view('frontend.about.index', compact('team', 'feedbacks', 'title'));
    }
}
