<?php

namespace Database\Seeders;

use App\Services\SocialMediaService;
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
            'facebook' => SocialMediaService::facebook(),
            'twitter' => SocialMediaService::twitter(),
            'instagram' => SocialMediaService::instagram(),
            'linkedin' => SocialMediaService::linkedin(),
            'youtube' => SocialMediaService::youtube(),
            'pinterest' => SocialMediaService::pinterest(),
            'other' => SocialMediaService::other(),
        ]);
    }
}
