<?php

namespace App\Services;

use App\Models\Faq;

class FaqService
{
    public function getFormattedFaqs()
    {
        $faqs = Faq::inRandomOrder()->take(6)->get();
        $formatter = new \NumberFormatter('en-US', \NumberFormatter::SPELLOUT);

        foreach ($faqs as $key => $faq) {
            $faq->formatted_key = ucwords($formatter->format($key + 1));
        }

        return $faqs;
    }
}