<?php

namespace Database\Seeders;

use App\Services\SocialMediaUrlGenerator;
use DB;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('social_media')->insert([
            'facebook' => SocialMediaUrlGenerator::facebook(),
            'twitter' => SocialMediaUrlGenerator::twitter(),
            'instagram' => SocialMediaUrlGenerator::instagram(),
            'linkedin' => SocialMediaUrlGenerator::linkedin(),
            'youtube' => SocialMediaUrlGenerator::youtube(),
            'pinterest' => SocialMediaUrlGenerator::pinterest(),
            'other' => SocialMediaUrlGenerator::other(),
        ]);
    }
}
