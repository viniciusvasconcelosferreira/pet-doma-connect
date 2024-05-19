<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('about_us')->insert([
            'title' => "It's our pleasure to care your pets",
            'subtitle' => 'Ultimately, pet care and veterinary services are critical for ensuring that our furry, feathered, or scaled friends lead happy, healthy lives.',
            'highlighted_services' => json_encode(["Best Veterinarian's", "Bath and Grooming", "24/7 Hour Care", "Best Foods"]),
            'client_photos' => json_encode(['about-us-lg-default.png', 'about-us-sm-default.png'])
        ]);
    }
}
