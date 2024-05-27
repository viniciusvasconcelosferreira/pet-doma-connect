<?php

if (!function_exists('formatNumberShort')) {
    function formatNumberShort($count)
    {
        if ($count < 1000) {
            return ['count' => $count, 'unit_suffixes' => ''];
        } elseif ($count < 1000000) {
            return ['count' => round($count / 1000, 1), 'unit_suffixes' => 'K'];
        } else {
            return ['count' => round($count / 1000000, 1), 'unit_suffixes' => 'M'];
        }
    }
}

if (!function_exists('sortOperatingHours')) {
    function sortOperatingHours($operatingHours)
    {
        $daysOfWeek = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        ];

        $sortedOperatingHours = [];

        foreach ($daysOfWeek as $day) {
            if (isset($operatingHours[$day])) {
                $sortedOperatingHours[$day] = $operatingHours[$day];
            }
        }

        return $sortedOperatingHours;
    }
}

if (!function_exists('extractPlatform')) {
    function extractPlatform($url)
    {
        preg_match('/www\.(.*?)\.com/', $url, $matches);

        return $matches[1] ?? null;
    }
}

if (!function_exists('cleanAndFormatPhoneNumber')) {
    function cleanAndFormatPhoneNumber($phoneNumber)
    {
        $cleanedPhoneNumber = preg_replace('/\D/', '', $phoneNumber);

        return 'https://wa.me/'.$cleanedPhoneNumber;
    }
}