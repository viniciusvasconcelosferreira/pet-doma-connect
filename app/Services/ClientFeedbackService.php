<?php

namespace App\Services;

use App\Models\ClientFeedbacks;

class ClientFeedbackService
{
    public function getClientFeedbacks()
    {
        return ClientFeedbacks::all();
    }
}