<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('goals')->insert([
            'goals' => json_encode([
                ['counter' => 100, 'name' => 'Happy Customers'],
                ['counter' => 2, 'name' => 'Awards'],
                ['counter' => 10, 'name' => 'Professionals'],
                ['counter' => 5, 'name' => 'Years of experience']
            ]),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
