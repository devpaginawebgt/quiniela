<?php

namespace App\Http\Resources\Equipo;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nombre' => $this->nombre,
            'imagen' => $this->imagen,
            'descripcion' => $this->descripcion,
            'grupo' => $this->grupo,
            'goles_favor' => $this->goles_favor,
            'goles_contra' => $this->goles_contra,
            'partidos_jugados' => $this->partidos_jugados,
            'partidos_ganados' => $this->partidos_ganados,
            'partidos_perdidos' => $this->partidos_perdidos,
            'partidos_empatados' => $this->partidos_empatados,
            'puntos' => $this->puntos,
        ];
    }
}
