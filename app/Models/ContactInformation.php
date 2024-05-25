<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    use HasFactory;

    protected $table = 'contact_information';

    protected $fillable = [
        'phone_number',
        'cell_phone_number',
        'phone_is_whatsapp',
        'cell_phone_is_whatsapp',
        'email',
        'address',
        'operating_hours',
    ];

    public function getOperatingHoursAttribute($value)
    {
        return json_decode($value, true);
    }

}
