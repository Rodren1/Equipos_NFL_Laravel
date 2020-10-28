<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipos;
use Illuminate\Support\Facades\DB;

class EquiposController extends Controller
{
    public function carga_equipo($nombre) //el parametro de entrada es el nombre del boton
    {
        $equipo = DB::table('equipos') //creo la variable $equipo y la igualo a la consulta
            ->where('nombre', '=', $nombre) // donde el nombre de la bbdd es igual al parametro de entrada
            ->get();
        // $equipo = Equipos::where('nombre', $nombre)->get(); consulta eloquent    
        return view('datosEquipo', array('equipos' => $equipo)); //retorno la vista de los datos obtenidos del equipo en cuestion
    }
}
