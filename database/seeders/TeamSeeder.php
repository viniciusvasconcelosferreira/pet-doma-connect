<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Team;
use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['name' => 'Cathy J. Gomez',
                'function' => 'Veterinary',
                'social_media' => json_encode([
                    ['type' => 'facebook', 'link' => 'https://www.facebook.com'],
                    ['type' => 'twitter', 'link' => 'https://twitter.com/'],
                    ['type' => 'instagram', 'link' => 'https://www.facebook.com'],
                ]),
                'photo' => 'team-home-1-default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['name' => 'Velma S. Barry',
                'function' => 'Groomer Manager',
                'social_media' => json_encode([
                    ['type' => 'facebook', 'link' => 'https://www.facebook.com'],
                    ['type' => 'twitter', 'link' => 'https://twitter.com/'],
                    ['type' => 'instagram', 'link' => 'https://www.facebook.com'],
                ]),
                'photo' => 'team-home-2-default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['name' => 'Carol C. Queen',
                'function' => 'Day-Care Manager',
                'social_media' => json_encode([
                    ['type' => 'facebook', 'link' => 'https://www.facebook.com'],
                    ['type' => 'twitter', 'link' => 'https://twitter.com/'],
                    ['type' => 'instagram', 'link' => 'https://www.facebook.com'],
                ]),
                'photo' => 'team-home-3-default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            ['name' => 'Julie K. Rusella',
                'function' => 'Boarding Manager',
                'social_media' => json_encode([
                    ['type' => 'facebook', 'link' => 'https://www.facebook.com'],
                    ['type' => 'twitter', 'link' => 'https://twitter.com/'],
                    ['type' => 'instagram', 'link' => 'https://www.facebook.com'],
                ]),
                'photo' => 'team-home-4-default.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($teams as $team) {
            $slug = Str::slug($team['name']);
            $team['slug'] = $slug;
            Team::create($team);
        }
    }
}
