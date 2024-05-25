<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_information')->insert([
            'phone_number' => fake('pt_BR')->landlineNumber(),
            'cell_phone_number' => fake('pt_BR')->cellphoneNumber(),
            'phone_is_whatsapp' => false,
            'cell_phone_is_whatsapp' => true,
            'address' => fake('pt_BR')->streetAddress(),
            'email' => 'contato@petdoma.com.br',
            'operating_hours' => json_encode([
                'Monday' => '01:45 - 21:45',
                'Tuesday' => '02:45 - 21:45',
                'Wednesday' => '02:45 - 21:45',
                'Thursday' => '01:45 - 21:45',
                'Friday' => '05:45 - 20:45',
                'Saturday' => '09:00 - 14:00',
                'Sunday' => 'Closed'
            ])
        ]);
    }
}
