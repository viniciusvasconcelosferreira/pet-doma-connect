<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Consulta Veterinária', 'description' => 'Exame de rotina para verificar a saúde e bem-estar do seu animal de estimação.', 'icon' => 'assets/images/services/003-checkup.svg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Banho e Tosa', 'description' => 'Serviços profissionais de banho e tosa para manter seu animal de estimação limpo e saudável.', 'icon' => 'assets/images/services/001-beauty-saloon.svg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vacinação', 'description' => 'Administração de vacinas essenciais para proteger seu animal de estimação contra doenças comuns.', 'icon' => 'assets/images/services/016-dog.svg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cirurgia Veterinária', 'description' => 'Procedimentos cirúrgicos realizados por veterinários experientes para tratar condições médicas.', 'icon' => 'assets/images/services/035-sterilization.svg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hotel para Pets', 'description' => 'Acomodações confortáveis e seguras para seu animal de estimação enquanto você está fora de casa.', 'icon' => 'assets/images/services/031-pet-hotel.svg', 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach ($services as $serviceData) {
            $slug = Str::slug($serviceData['name']);
            $serviceData['slug'] = $slug;
            Service::create($serviceData);
        }
    }
}
