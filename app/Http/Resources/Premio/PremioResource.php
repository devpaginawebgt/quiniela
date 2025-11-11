<?php

namespace App\Http\Resources\Premio;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PremioResource extends JsonResource
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
            'descripcion' => $this->descripcion,
            'imagen' => $this->imagen,
            'posicion' => $this->posicion,
            'paisId' => $this->pais_id,
        ];
    }
}
