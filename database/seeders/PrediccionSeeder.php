<?php

namespace Database\Seeders;

use App\Models\Preccion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrediccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $predicciones = [
            [
                'user_id' => 1,
                'partido_id' => 1,
                'goles_equipo_1' => 2,
                'goles_equipo_2' => 2,
            ],
            [
                'user_id' => 1,
                'partido_id' => 2,
                'goles_equipo_1' => 2,
                'goles_equipo_2' => 2,
            ],
        ];

        foreach($predicciones as $prediccion) {

            Preccion::create($prediccion);

        }

        $predicciones_user_1 = 12;

        for ($i = 0; $i < $predicciones_user_1; $i++) {
            Preccion::factory()->create([
                'user_id' => 1,
                'partido_id' => $i + 3,
            ]);
        }

        $predicciones_user_2 = 14;

        for ($i = 0; $i < $predicciones_user_2; $i++) {
            Preccion::factory()->create([
                'user_id' => 2,
                'partido_id' => $i + 1,
            ]);
        }
    }
}
