<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;


class EquiposController extends Controller
{
    public function devuelve_equipo($nombre)
    {
        return Equipos::where('nombre', $nombre);
    }

    public function carga_equipo($nombre)
    {
        return view('datosEquipo')
            ->with('datosEquipo', Equipos::where('nombre', $nombre));
    }
}

