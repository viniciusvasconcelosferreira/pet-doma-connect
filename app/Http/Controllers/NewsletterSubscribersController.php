<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscribers;
use Illuminate\Http\Request;

class NewsletterSubscribersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        NewsletterSubscribers::create([
            'email' => $request->email,
        ]);

        notyf()
            ->position('x', 'right ')
            ->position('y', 'top')
            ->success('Inscrição realizada com sucesso!');

        return redirect()->to(url()->previous() . '#subscribe');
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
