<?php

namespace App\Services;

use App\Models\Contact;
use App\Utils\PhoneNumberFormatter;

class ContactService
{
    public function storeContact(array $data)
    {
        $data['phone_number'] = PhoneNumberFormatter::clean($data['phone_number']);
        return Contact::create($data);
    }
}