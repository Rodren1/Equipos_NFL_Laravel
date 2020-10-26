@extends('layouts.layout_principal')
@section('titulo', 'Equipos de la AFC')

@section('navbar')
@parent
@endsection

@section('cartas')
<br>
<div class="container" style="background-color: darkred;">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/bills.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Buffalo Bills']) }}" class="btn btn-xs btn-secondary">
                            <h3>Buffalo Bills</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/dolphins.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Miami Dolphins']) }}" class="btn btn-xs btn-secondary">
                            <h3>Miami Dolphins</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/patriots.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['New England Patriots']) }}" class="btn btn-xs btn-secondary">
                            <h>New England Patriots</h>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/jets.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['New York Jets']) }}" class="btn btn-xs btn-secondary">
                            <h3>New York Jets</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/ravens.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Baltimore Ravens']) }}" class="btn btn-xs btn-secondary">
                            <h3>Baltimore Ravens</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/bengals.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Cincinnati Bengals']) }}" class="btn btn-xs btn-secondary">
                            <h3>Cincinnati Bengals</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/browns.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Cleveland Browns']) }}" class="btn btn-xs btn-secondary">
                            <h3>Cleveland Browns</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/steelers.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Pittsburgh Steelers']) }}" class="btn btn-xs btn-secondary">
                            <h3>Pittsburgh Steelers</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/texans.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Houston Texans']) }}" class="btn btn-xs btn-secondary">
                            <h3>Houston Texans</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/colts.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Indianapolis Colts']) }}" class="btn btn-xs btn-secondary">
                            <h3>Indianapolis Colts</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/jaguars.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Jacksonville Jaguars']) }}" class="btn btn-xs btn-secondary">
                            <h3>Jacksonville Jaguars</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/titans.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Tennessee Titans']) }}" class="btn btn-xs btn-secondary">
                            <h3>Tennessee Titans</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/broncos.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Denver Broncos']) }}" class="btn btn-xs btn-secondary">
                            <h3>Denver Broncos</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/chiefs.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Kansas City Chiefs']) }}" class="btn btn-xs btn-secondary">
                            <h3>Kansas City Chiefs</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/raiders.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Las Vegas Raiders']) }}" class="btn btn-xs btn-secondary">
                            <h3>Las Vegas Raiders</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/AFC/chargers.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Los Angeles Chargers']) }}" class="btn btn-xs btn-secondary">
                            <h3>Los Angeles Chargers</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection