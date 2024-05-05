<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactInformationUpdateRequest;
use App\Http\Requests\SocialMediaUpdateRequest;
use App\Models\ContactInformation;
use App\Models\SocialMedia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FooterController extends Controller
{
    /**
     * Display the footer information form.
     */
    public function edit(Request $request): View
    {
        return view('backend.footer.edit', [
            'social_media' => SocialMedia::first(),
            'contact' => ContactInformation::first()
        ]);
    }

    /**
     * Update the social media information.
     */
    public function updateSocialMedia(SocialMediaUpdateRequest $request): RedirectResponse
    {
        $socialMedia = SocialMedia::first();

        if ($socialMedia) {
            $socialMedia->update($request->validated());
        } else {
            SocialMedia::create($request->validated());
        }

        return Redirect::route('footer.edit')->with('status', 'social_media-updated');
    }

    /**
     * Update the contact information.
     */
    public function updateContactInformation(ContactInformationUpdateRequest $request): RedirectResponse
    {
        $contactInfo = ContactInformation::first();

        if ($contactInfo) {
            $contactInfo->update($request->validated());
        } else {
            ContactInformation::create($request->validated());
        }

        return Redirect::route('footer.edit')->with('status', 'contact-updated');
    }
}
