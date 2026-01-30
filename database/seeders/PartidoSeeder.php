<?php

namespace Database\Seeders;

use App\Models\Partido;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partidos = [
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(6)->subHours(2)->toDateTimeString(),
                'estadio_id'    => 1
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1, 
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(6)->subHours(1)->toDateTimeString(),
                'estadio_id'    => 4
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(5)->subHours(1)->toDateTimeString(),
                'estadio_id'    => 6
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(5)->toDateTimeString(),
                'estadio_id'    => 2,
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(4)->toDateTimeString(),
                'estadio_id'    => 2,
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(4)->subHours(2)->toDateTimeString(),
                'estadio_id'    => 2,
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(3)->subHours(2)->toDateTimeString(),
                'estadio_id'    => 8
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(3)->subHours(1)->toDateTimeString(),
                'estadio_id'    => 5
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(2)->subHours(2)->toDateTimeString(),
                'estadio_id'    => 2
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(2)->subHours(1)->toDateTimeString(),
                'estadio_id'    => 6
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subDays(1)->subHours(1)->toDateTimeString(),
                'estadio_id'    => 4
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subHours(3)->toDateTimeString(),
                'estadio_id'    => 1
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subHours(1)->toDateTimeString(),
                'estado'        => 2,
                'estadio_id'    => 3
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->subMinutes(2)->toDateTimeString(),
                'estado'        => 2,
                'estadio_id'    => 5
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addMinutes(5)->toDateTimeString(),
                'estadio_id'    => 8
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  1,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addHours(1)->toDateTimeString(),
                'estadio_id'    => 7
            ],

            // Segunda jornada

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 1
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 4
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addHours(6)->addHours(rand(1,3))->toDateTimeString(),
                'estadio_id'    => 6
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addHours(8)->addHours(rand(1,3))->toDateTimeString(),
                'estadio_id'    => 2
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(1)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 1
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(1)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 5
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(1)->addHours(6)->toDateTimeString(),
                'estadio_id'    => 8
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(1)->addHours(8)->toDateTimeString(),
                'estadio_id'    => 7
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(2)->toDateTimeString(),
                'estadio_id'    => 1
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(2)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 4
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(2)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 6
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(2)->addHours(6)->toDateTimeString(),
                'estadio_id'    => 2
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(3)->toDateTimeString(),
                'estadio_id'    => 3
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(3)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 5
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(3)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 8
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  2,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(3)->addHours(6)->toDateTimeString(),
                'estadio_id'    => 7
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(4)->toDateTimeString(),
                'estadio_id'    => 2
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(4)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 6
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(4)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 1
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(4)->addHours(6)->toDateTimeString(),
                'estadio_id'    => 4
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(5)->toDateTimeString(),
                'estadio_id'    => 5
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(5)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 3
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(5)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 7
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(5)->addHours(6)->toDateTimeString(),
                'estadio_id'    => 8
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(7)->toDateTimeString(),
                'estadio_id'    => 1
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(7)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 4
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(7)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 6
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(7)->addHours(6)->toDateTimeString(),
                'estadio_id'    => 2
            ],

            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(8)->toDateTimeString(),
                'estadio_id'    => 3
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(8)->addHours(2)->toDateTimeString(),
                'estadio_id'    => 5
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(8)->addHours(4)->toDateTimeString(),
                'estadio_id'    => 8
            ],
            [
                'fase'      =>  'GRUPOS',
                'jornada'   =>  3,
                'fecha_partido' => Carbon::create(2026, 6, 8, 9)->addDays(8)->addHours(6)->toDateTimeString(),
                'estadio_id'    => 7
            ],
        ];

        foreach($partidos as $partido) {

            Partido::create($partido);

        }
    }
}
