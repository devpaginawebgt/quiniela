<?php

namespace App\Http\Resources\Estadio;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EstadioResource extends JsonResource
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
            'descripcion' => $this->descripcion,
            'imagen' => $this->imagen,
        ];
    }
}
