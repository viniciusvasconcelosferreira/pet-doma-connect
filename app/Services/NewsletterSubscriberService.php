<?php

namespace App\Services;

use App\Models\NewsletterSubscribers;

class NewsletterSubscriberService
{
    public function subscribe(string $email)
    {
        return NewsletterSubscribers::create(['email' => $email]);
    }
}