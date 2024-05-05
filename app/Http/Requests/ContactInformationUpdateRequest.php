<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactInformationUpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'phone_number' => ['string', 'nullable', 'max:255'],
            'cell_phone_number' => ['string', 'nullable', 'max:255'],
            'email' => ['string', 'nullable', 'max:255', 'email'],
            'address' => ['string', 'nullable', 'max:255'],
            'phone_is_whatsapp' => ['boolean', 'nullable'],
            'cell_phone_is_whatsapp' => ['boolean', 'nullable'],
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('cell_phone_number', ['required_if:cell_phone_is_whatsapp,1'], function ($input) {
            return $input->cell_phone_is_whatsapp;
        });

        $validator->sometimes('phone_number', ['required_if:phone_is_whatsapp,1'], function ($input) {
            return $input->phone_is_whatsapp;
        });
    }

}
