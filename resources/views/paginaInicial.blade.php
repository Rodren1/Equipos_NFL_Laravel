@extends('layouts.layout_principal')
@section('titulo', 'Página de inicio')

@section('navbar')
@parent
@endsection

@section('infoPrincipal')
<br>
<br>
<div class="container" style="background-color: darkred;">
    <div>
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/imagenMuestra1.jpg') }}" class="d-block w-100" alt="..." height="500" width="450">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagenMuestra2.jpg') }}" class="d-block w-100" alt="..." height="500" width="450">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagenMuestra3.jpg') }}" class="d-block w-100" alt="..." height="500" width="450">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagenMuestra4.jpg') }}" class="d-block w-100" alt="..." height="500" width="450">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/mapaConferencias.png') }}" class="d-block w-100" alt="..." height="500" width="450">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
    </div>
    <div>
        <p class="parrafoInicio">
            <br>
            La National Football League (NFL), es la mayor liga de
            fútbol americano profesional de los Estados Unidos.
            La NFL toma la figura jurídica de asociación deportiva, controlada por sus propios miembros.​
            Fue creada por once equipos en 1920 como la American Professional Football Association, cambiando su nombre
            por el de American Professional Football League en 1921 para modificarlo una vez más por el nombre ahora vigente en 1922.
            Actualmente la NFL está formada por 32 franquicias establecidas en diversas ciudades y regiones estadounidenses.
            Se divide en dos conferencias: la Nacional (NFC) y la Americana (AFC). A su vez, cada conferencia se integra por cuatro divisiones
            (Norte, Sur, Este y Oeste) y cada una de ellas, por cuatro diferentes equipos.
            <br>
            La temporada regular consiste en un calendario de diecisiete semanas durante las cuales cada equipo tiene una de descanso
            (denominada bye week), consistiendo en seis partidos contra rivales de la misma división, así como varios duelos interdivisionales
            e interconferenciales. Comienza la noche del jueves de la primera semana completa de septiembre (el jueves posterior al Labor Day)
            y prosigue hasta principios de enero. Al finalizar, siete equipos (los cuatro campeones de división y tres invitados o wild cards)
            de cada conferencia disputan las eliminatorias o playoffs. Después de eso, viene la final de cada conferencia, donde los ganadores
            de cada una van directos al partido soñado, conocido como Super Bowl. La semana anterior se disputa el Pro Bowl, en la que se
            enfrentan ambas conferencias integradas por sus mejores jugadores de ese año.
            <br>
        </p>
    </div>
</div>
@endsection