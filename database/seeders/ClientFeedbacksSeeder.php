<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientFeedbacksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client_feedbacks')->insert([
            [
                'rating' => 5,
                'title' => 'Excellent service! My dog loves coming here.',
                'comments' => 'I was really impressed with the nutrition counseling services offered at this veterinary clinic. They helped me select the right food and supplements for my pet.',
                'pet_name' => 'Buddy',
                'owner_name' => 'John Doe',
                'photo' => 'testimonial-1-default.png'
            ],
            [
                'rating' => 4,
                'title' => 'Great staff and facilities. Highly recommend.',
                'comments' => 'I was really impressed with the nutrition counseling services offered at this veterinary clinic. They helped me select the right food and supplements for my pet.',
                'pet_name' => 'Mittens',
                'owner_name' => 'Jane Smith',
                'photo' => 'testimonial-2-default.png',
            ],
            [
                'rating' => 3,
                'title' => 'A team of vets you can trust',
                'comments' => 'I was really impressed with the nutrition counseling services offered at this veterinary clinic. They helped me select the right food and supplements for my pet.',
                'pet_name' => 'Jack',
                'owner_name' => 'Lorri M. Dustin',
                'photo' => 'testimonial-1-default.png',
            ],
            [
                'rating' => 4,
                'title' => 'A team of vets you can trust',
                'comments' => 'I was really impressed with the nutrition counseling services offered at this veterinary clinic. They helped me select the right food and supplements for my pet.',
                'pet_name' => 'Jack',
                'owner_name' => 'Irene C. Pena',
                'photo' => 'testimonial-2-default.png',
            ],
            [
                'rating' => 5,
                'title' => 'A team of vets you can trust',
                'comments' => 'I was really impressed with the nutrition counseling services offered at this veterinary clinic. They helped me select the right food and supplements for my pet.',
                'pet_name' => 'Jack',
                'owner_name' => 'Lorri M. Dustin',
                'photo' => 'testimonial-1-default.png',
            ],
            [
                'rating' => 4,
                'title' => 'A team of vets you can trust',
                'comments' => 'I was really impressed with the nutrition counseling services offered at this veterinary clinic. They helped me select the right food and supplements for my pet.',
                'pet_name' => 'Jack',
                'owner_name' => 'Irene C. Pena',
                'photo' => 'testimonial-2-default.png',
            ]
        ]);
    }
}
