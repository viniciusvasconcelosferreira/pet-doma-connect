<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SocialMediaUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'facebook' => ['string', 'max:255', 'url', 'nullable'],
            'twitter' => ['string', 'max:255', 'url', 'nullable'],
            'instagram' => ['string', 'max:255', 'url', 'nullable'],
            'linkedin' => ['string', 'max:255', 'url', 'nullable'],
            'youtube' => ['string', 'max:255', 'url', 'nullable'],
            'pinterest' => ['string', 'max:255', 'url', 'nullable'],
            'other' => ['string', 'max:255', 'url', 'nullable'],
        ];
    }
}
