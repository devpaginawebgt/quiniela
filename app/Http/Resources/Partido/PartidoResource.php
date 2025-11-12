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
        return [
            'id' => $this->partido->id,            
            'fechaPartido' => $this->partido->fecha_partido,
            'jugado' => $this->partido->jugado === 1,

            'equipoUno' => new EquipoPartidoResource($this->equipoUno),
            'equipoDos' => new EquipoPartidoResource($this->equipoDos),
        ];
    }
}
