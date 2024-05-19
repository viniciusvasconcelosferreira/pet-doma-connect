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
            ['name' => 'Consulta Veterinária', 'description' => 'Exame de rotina para verificar a saúde e bem-estar do seu animal de estimação.', 'icon' => '003-checkup.svg'],
            ['name' => 'Banho e Tosa', 'description' => 'Serviços profissionais de banho e tosa para manter seu animal de estimação limpo e saudável.', 'icon' => '001-beauty-saloon.svg'],
            ['name' => 'Vacinação', 'description' => 'Administração de vacinas essenciais para proteger seu animal de estimação contra doenças comuns.', 'icon' => '016-dog.svg'],
            ['name' => 'Cirurgia Veterinária', 'description' => 'Procedimentos cirúrgicos realizados por veterinários experientes para tratar condições médicas.', 'icon' => '035-sterilization.svg'],
            ['name' => 'Hotel para Pets', 'description' => 'Acomodações confortáveis e seguras para seu animal de estimação enquanto você está fora de casa.', 'icon' => '031-pet-hotel.svg'],
        ];

        foreach ($services as $serviceData) {
            $slug = Str::slug($serviceData['name']);
            $serviceData['slug'] = $slug;
            Service::create($serviceData);
        }
    }
}
