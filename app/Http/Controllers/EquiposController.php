<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;
use Illuminate\Support\Facades\DB;

class EquiposController extends Controller
{
    public function carga_equipo($nombre)
    {
        $equipo = DB::table('equipos')
            ->where('nombre', '=', $nombre)
            ->get();
        return view('datosEquipo', array('equipos' => $equipo));
    }
}
