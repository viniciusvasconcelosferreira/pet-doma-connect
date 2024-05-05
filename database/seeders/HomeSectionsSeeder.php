<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('home_sections')->insert([
            ['section_name' => 'hero', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'about-us', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'services', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'features', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'happy-customer', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'team', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'testimonial', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'home-contact', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'home-blog', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['section_name' => 'subscribe', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
