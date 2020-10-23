@extends('layouts.layout_principal')
@section('titulo', 'National Football Leage')

@section('navbar')
@parent
@endsection

@section('infoPrincipal')
<br>
<div class="container" style="background-color: darkred;">
    <br>
    <table class="table table-secondary">
        <tbody>
            <tr>
                <th scope="row">Nombre del equipo</th>
                <td>{{$datosEquipo->nombre}}</td>
            </tr>
            <tr>
                <th scope="row">Ciudad de residencia</th>
                <td>{{$datosEquipo->ciudad}}</td>
            </tr>
            <tr>
                <th scope="row">Estadio del equipo</th>
                <td>{{$datosEquipo->estadio}}</td>
            </tr>
            <tr>
                <th scope="row">Conferencia del equipo</th>
                <td>{{$datosEquipo->conferencia}}</td>
            </tr>
            <tr>
                <th scope="row">División del equipo</th>
                <td>{{$datosEquipo->division}}</td>
            </tr>
            <tr>
                <th scope="row">Campeonatos de conferencia</th>
                <td>{{$datosEquipo->campeonatosConferencia}}</td>
            </tr>
            <tr>
                <th scope="row">Campeonatos de división</th>
                <td>{{$datosEquipo->campeonatosDivision}}</td>
            </tr>
            <tr>
                <th scope="row">Super Bowls</th>
                <td>{{$datosEquipo->SuperBowls}}</td>
            </tr>
            <tr>
                <th scope="row">Historia del equipo</th>
                <td>{{$datosEquipo->historia}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection