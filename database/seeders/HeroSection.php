<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class HeroSection extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hero_sections')->insert([
            'title' => 'There is nothing more important to us than your pet',
            'subtitle' => 'Pets are humanizing. They remind us we have an obligation and responsibility to preserve and nurture and care for all life',
            'featured_photo' => 'hero-1-default.png',
            'sub_featured_photos' => json_encode(['client-1-default.png', 'client-2-default.png', 'client-3-default.png']),
            'name_button' => 'Make An Appointment',
            'link_button' => 'frontend.contact',
            'satisfied_customers' => 10000
        ]);
    }
}
