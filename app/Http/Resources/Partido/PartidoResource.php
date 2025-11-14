<?php

namespace App\Http\Resources\Partido;

use App\Http\Resources\Equipo\EquipoPartidoResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PartidoResource extends JsonResource
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
                $estado = 'Partido terminado';
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
            'id_estado' => $this->partido->estado,
            'estado' => $estado,

            'equipoUno' => new EquipoPartidoResource($this->equipoUno),
            'equipoDos' => new EquipoPartidoResource($this->equipoDos),
        ];
    }
}
