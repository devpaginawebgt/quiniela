<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $paises = [ 'Guatemala', 'El Salvador', 'Honduras', 'Nicaragua', 'Costa Rica'];

        $statuses = ['Bloqueado', 'Activo'];

        return [
            'id' => $this->id,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'numero_documento' => $this->numero_documento,
            'telefono' => $this->telefono,
            'pais_id' => $this->pais_id,
            'pais' => $paises[$this->pais_id - 1],
            'email' => $this->email,
            'puntos' => $this->puntos,
            'status' => $statuses[$this->status_user],
        ];
    }
}
