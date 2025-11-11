<?php

namespace Database\Seeders;

use App\Models\Premio;
use Illuminate\Database\Seeder;

class PremioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $premios = [
            [
                'nombre' => 'Televisión 55" 4K UHD',
                'descripcion' => 'Televisor de alta definición con conectividad inteligente y control por voz.',
                'imagen' => '/images/premios/tv.png',
                'posicion' => 1,
                'pais_id' => 1,
            ],
            [
                'nombre' => 'Teléfono Xiaomi 5G',
                'descripcion' => 'Smartphone Xiaomi con conectividad 5G, pantalla AMOLED y cámara de alta resolución.',
                'imagen' => '/images/premios/phone.png',
                'posicion' => 2,
                'pais_id' => 1,
            ],
            [
                'nombre' => 'Smartwatch deportivo',
                'descripcion' => 'Reloj inteligente con monitor de ritmo cardíaco y seguimiento de actividad física.',
                'imagen' => '/images/premios/smartwatch.png',
                'posicion' => 3,
                'pais_id' => 1,
            ],
        ];

        foreach($premios as $premio) {
            Premio::create($premio);
        }
    }
}
