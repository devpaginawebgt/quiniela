<?php

namespace App\Http\Resources\Resultado;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Equipo\EquipoPartidoResource;

class ResultadoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $estado = 'Por jugar';

        switch($this->partido->estado) {
            case 1:
                $estado = 'Partido finalizado';
                break;
            case 2:
                $estado = '¡Partido en curso!';
                break;
            default:
                $estado = 'Por jugar';
                break;
        }

        return [
            'id' => $this->partido->id,            
            'fechaPartido' => $this->partido->fecha_partido,
            'jugado' => $this->partido->jugado === 1,
            'idEstado' => $this->partido->estado,
            'estado' => $estado,

            'equipoUno' => new EquipoPartidoResource($this->equipoUno),
            'equipoDos' => new EquipoPartidoResource($this->equipoDos),

            'prediccionEquipoUno' => $this->prediccion_equipo_1,
            'prediccionEquipoDos' => $this->prediccion_equipo_2,

            'resultadoEquipoUno' => $this->resultado->goles_equipo_1,
            'resultadoEquipoDos' => $this->resultado->goles_equipo_2,
            'puntos' => $this->puntos,
            'mensaje' => $this->mensaje,
        ];
    }
}
