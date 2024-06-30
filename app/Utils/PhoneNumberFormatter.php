<?php

namespace App\Utils;

class PhoneNumberFormatter
{
    public static function clean($phoneNumber)
    {
        return preg_replace("/[^0-9]/", "", $phoneNumber);
    }
}