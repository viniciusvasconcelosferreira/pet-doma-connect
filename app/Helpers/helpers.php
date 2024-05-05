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
