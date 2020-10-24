@extends('layouts.layout_principal')
@section('titulo', 'National Football Leage')

@section('navbar')
@parent
@endsection

@section('infoPrincipal')
<br>
<div class="container" style="background-color: darkred;">
    <br><br>
    <table class="table table-secondary">
        <tbody>
            @foreach($equipos as $equipo)
            <tr>
                <th scope="row">Nombre del equipo</th>
                <td>{{$equipo->nombre}}</td>
            </tr>
            <tr>
                <th scope="row">Ciudad de residencia</th>
                <td>{{$equipo->ciudad}}</td>
            </tr>
            <tr>
                <th scope="row">Estadio del equipo</th>
                <td>{{$equipo->estadio}}</td>
            </tr>
            <tr>
                <th scope="row">Conferencia del equipo</th>
                <td>{{$equipo->conferencia}}</td>
            </tr>
            <tr>
                <th scope="row">División del equipo</th>
                <td>{{$equipo->division}}</td>
            </tr>
            <tr>
                <th scope="row">Campeonatos de conferencia</th>
                <td>{{$equipo->campeonatosConferencia}}</td>
            </tr>
            <tr>
                <th scope="row">Campeonatos de división</th>
                <td>{{$equipo->campeonatosDivision}}</td>
            </tr>
            <tr>
                <th scope="row">Super Bowls</th>
                <td>{{$equipo->superBowls}}</td>
            </tr>
            <tr>
                <th scope="row">Historia del equipo</th>
                <td>{{$equipo->historia}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
</div>
@endsection