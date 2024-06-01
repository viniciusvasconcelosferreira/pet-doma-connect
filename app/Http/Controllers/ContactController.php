<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactInformation;
use App\Models\Faq;
use App\Models\Service;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = ContactInformation::first();
        $social_media = SocialMedia::first();
        $all_services = Service::all()->pluck('name')->toArray();
        $faqs = Faq::inRandomOrder()->take(6)->get();

        $formatter = new \NumberFormatter('en-US', \NumberFormatter::SPELLOUT);

        foreach ($faqs as $key => $faq) {
            $faq->formatted_key = ucwords($formatter->format($key + 1));
        }

        return view('frontend.contact.contact', compact('contact', 'social_media', 'all_services', 'faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'service' => 'required|string|max:255',
            'message' => 'string',
        ]);

        // Limpeza do número de telefone
        $validatedData['phone_number'] = preg_replace("/[^0-9]/", "", $validatedData['phone_number']);

        Contact::create($validatedData);

        notyf()
            ->position('x', 'right ')
            ->position('y', 'top')
            ->success('Contato enviado com sucesso!');

        return redirect()->to(url()->previous().'#home-contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
