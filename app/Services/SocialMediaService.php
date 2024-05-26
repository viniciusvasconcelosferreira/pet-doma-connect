<?php

namespace App\Services;

use Illuminate\Support\Str;

class SocialMediaService
{
    protected static function generateUrl($baseUrl)
    {
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();
        $username = Str::slug($firstName.$lastName);

        return $baseUrl.$username;
    }

    public static function facebook()
    {
        return self::generateUrl('https://www.facebook.com/');
    }

    public static function twitter()
    {
        return self::generateUrl('https://twitter.com/');
    }

    public static function linkedin()
    {
        return self::generateUrl('https://www.linkedin.com/in/');
    }

    public static function instagram()
    {
        return self::generateUrl('https://www.instagram.com/');
    }

    public static function youtube()
    {
        return self::generateUrl('https://www.youtube.com/@');
    }

    public static function pinterest()
    {
        $baseUrl = env('APP_LOCALE') !== 'pt_BR' ? 'https://pinterest.com/' : 'https://br.pinterest.com/';
        return self::generateUrl($baseUrl);
    }

    public static function other()
    {
        $baseUrls = ['https://www.tiktok.com/@', 'https://www.snapchat.com/add/'];
        $randomBaseUrl = $baseUrls[array_rand($baseUrls)];

        return self::generateUrl($randomBaseUrl);
    }
}
