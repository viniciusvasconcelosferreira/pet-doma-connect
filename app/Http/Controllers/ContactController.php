<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Models\ContactInformation;
use App\Services\ContactService;
use App\Services\FaqService;
use App\Services\ServiceService;
use App\Services\SocialMediaService;

class ContactController extends Controller
{
    protected $contactService;
    protected $faqService;
    protected $serviceService;
    protected $socialMediaService;

    public function __construct(
        ContactService $contactService,
        FaqService $faqService,
        ServiceService $serviceService,
        SocialMediaService $socialMediaService
    ) {
        $this->contactService = $contactService;
        $this->faqService = $faqService;
        $this->serviceService = $serviceService;
        $this->socialMediaService = $socialMediaService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = ContactInformation::first();
        $social_media = $this->socialMediaService->getSocialMedia();
        $all_services = $this->serviceService->getAllServiceNames();
        $faqs = $this->faqService->getFormattedFaqs();
        $title = 'Contate-nos | PET D.O.M.A';

        return view('frontend.contact.index', compact('contact', 'social_media', 'all_services', 'faqs', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactStoreRequest $request)
    {
        $this->contactService->storeContact($request->validated());

        notyf()
            ->position('x', 'right ')
            ->position('y', 'top')
            ->success('Contato enviado com sucesso!');

        return redirect()->to(url()->previous().'#home-contact');
    }
}
