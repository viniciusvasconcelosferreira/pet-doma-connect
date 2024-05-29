<?php

namespace App\View\Composers;

use App\Models\ContactInformation;
use App\Models\SocialMedia;
use Illuminate\View\View;

class FooterComposer
{
    public function compose(View $view): void
    {
        $contact = ContactInformation::first();
        $social_media = SocialMedia::first();

        $view->with([
            'contact' => $contact,
            'social_media' => $social_media
        ]);
    }
}