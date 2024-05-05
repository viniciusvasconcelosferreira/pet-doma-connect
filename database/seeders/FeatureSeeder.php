<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            [
                'title' => 'Our best staff looks after your pets',
                'subtitle' => 'The Purrwell team is dedicated to providing the highest quality care for your dog. Everyone of our campers receives individual attention and sensitive loving care.',
                'features' => json_encode(
                    [
                        ['icon' => 'assets/images/icons/features-1.svg', 'name' => 'Vaccinations', 'describe' => 'Immunizations to protect your pet against common and potentially dangerous illnesses.'],
                        ['icon' => 'assets/images/icons/features-2.svg', 'name' => 'Nutrition Counseling', 'describe' => "Advice on selecting the right food and supplem-ents for your pet's specific needs."],
                        ['icon' => 'assets/images/icons/features-3.svg', 'name' => 'Pet insurance', 'describe' => "Insurance plans that can help cover the costs of veterinary care and treatments."],
                        ['icon' => 'assets/images/icons/features-4.svg', 'name' => 'Dental Care', 'describe' => "Routine cleanings and dental exams to maintain your pet's oral health."],
                    ]
                ),
                'image' => 'assets/images/features-lg-default.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
