<?php

namespace Database\Seeders;

use App\Models\NewsletterSubscribers;
use Illuminate\Database\Seeder;

class NewsletterSubscribersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsletterSubscribers::factory(30)->create();
    }
}
