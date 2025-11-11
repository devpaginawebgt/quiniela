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
            'id' => $this->id,
            'nombre' => $this->nombre,
            'imagen' => $this->imagen,
            'descripcion' => $this->descripcion,
            'grupo' => $this->grupo,
            'golesFavor' => $this->goles_favor,
            'golesContra' => $this->goles_contra,
            'partidosJugados' => $this->partidos_jugados,
            'partidosGanados' => $this->partidos_ganados,
            'partidosPerdidos' => $this->partidos_perdidos,
            'partidosEmpatados' => $this->partidos_empatados,
            'puntos' => $this->puntos,
        ];
    }
}
