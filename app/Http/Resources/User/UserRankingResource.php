<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserRankingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $color = '';

        switch($this->posicion) {
            case 1:
                $color = '#FFBF00';
                break;

            case 2:
                $color = '#BEBEBE';
                break;

            case 3:
                $color = '#A0522D';
                break;
                
            default:
                $color = '#FFFFFF';
                break;
        }

        return [
            'id' => $this->id,
            'posicion' => $this->posicion,
            'color' => $color,
            'nombres' => $this->nombres,
            'apellidos' => $this->apellidos,
            'fechaRegistro' => $this->name,
            'puntos' => $this->puntos,
        ];
    }
}
