<?php

namespace App\Http\Services;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Builder;

class EquipoService {

    public function getGrupos()
    {
        return collect(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H']);
    }

    public function getEquipos(string|null $grupo = null)
    {
        return Equipo::when($grupo, function(Builder $query) use($grupo) {
            return $query->where('grupo', $grupo);
        })
            ->orderBy('puntos', 'desc')
            ->orderBy('nombre', 'asc')
            ->get();
        
    }

}