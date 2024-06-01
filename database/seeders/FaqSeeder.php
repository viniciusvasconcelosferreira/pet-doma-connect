<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('faqs')->insert([
            [
                'question' => 'What services do you offer for pets?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, sit voluptate ad optio fuga itaque aperiam commodi doloremque atque ducimus voluptatem. Soluta molestiae enim distinctio illo dolorum similique, odio cumque animi perferendis quis doloremque tempora alias quidem veritatis saepe tenetur possimus, unde vero omnis eius sit eum laborum expedita dicta?'
            ],
            [
                'question' => 'Do you offer overnight care for pets?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, sit voluptate ad optio fuga itaque aperiam commodi doloremque atque ducimus voluptatem. Soluta molestiae enim distinctio illo dolorum similique, odio cumque animi perferendis quis doloremque tempora alias quidem veritatis saepe tenetur possimus, unde vero omnis eius sit eum laborum expedita dicta?'
            ],
            [
                'question' => 'How do you ensure the safety of my pet?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, sit voluptate ad optio fuga itaque aperiam commodi doloremque atque ducimus voluptatem. Soluta molestiae enim distinctio illo dolorum similique, odio cumque animi perferendis quis doloremque tempora alias quidem veritatis saepe tenetur possimus, unde vero omnis eius sit eum laborum expedita dicta?'
            ],
            [
                'question' => 'Are your pet care professionals trained and experienced?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, sit voluptate ad optio fuga itaque aperiam commodi doloremque atque ducimus voluptatem. Soluta molestiae enim distinctio illo dolorum similique, odio cumque animi perferendis quis doloremque tempora alias quidem veritatis saepe tenetur possimus, unde vero omnis eius sit eum laborum expedita dicta?'
            ],
            [
                'question' => 'What is your cancellation policy?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, sit voluptate ad optio fuga itaque aperiam commodi doloremque atque ducimus voluptatem. Soluta molestiae enim distinctio illo dolorum similique, odio cumque animi perferendis quis doloremque tempora alias quidem veritatis saepe tenetur possimus, unde vero omnis eius sit eum laborum expedita dicta?'
            ],
            [
                'question' => 'How do I book your services?',
                'answer' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, sit voluptate ad optio fuga itaque aperiam commodi doloremque atque ducimus voluptatem. Soluta molestiae enim distinctio illo dolorum similique, odio cumque animi perferendis quis doloremque tempora alias quidem veritatis saepe tenetur possimus, unde vero omnis eius sit eum laborum expedita dicta?'
            ],
        ]);
    }
}
