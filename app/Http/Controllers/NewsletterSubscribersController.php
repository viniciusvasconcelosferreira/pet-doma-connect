<?php

namespace App\Http\Controllers;

use App\Services\NewsletterSubscriberService;
use Illuminate\Http\Request;

class NewsletterSubscribersController extends Controller
{
    protected $newsletterSubscriberService;

    public function __construct(NewsletterSubscriberService $newsletterSubscriberService)
    {
        $this->newsletterSubscriberService = $newsletterSubscriberService;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        $this->newsletterSubscriberService->subscribe($request->email);

        notyf()
            ->position('x', 'right')
            ->position('y', 'top')
            ->success('Inscrição realizada com sucesso!');

        return redirect()->to(url()->previous().'#subscribe');
    }
}
