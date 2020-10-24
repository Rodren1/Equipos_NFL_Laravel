@extends('layouts.layout_principal')
@section('titulo', 'Equipos de la NFL')

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
                            <h3>New England Patriots</h3>
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
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/cowboys.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Dallas Cowboys']) }}" class="btn btn-xs btn-secondary">
                            <h3>Dallas Cowboys</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/giants.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['New York Giants']) }}" class="btn btn-xs btn-secondary">
                            <h3>New York Giants</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/eagles.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Philadelphia Eagles']) }}" class="btn btn-xs btn-secondary">
                            <h3>Philadelphia Eagles</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/redskins.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Washington Redskins']) }}" class="btn btn-xs btn-secondary">
                            <h3>Washington Redskins</h3>
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
                    <img src="{{ asset('img/NFC/bears.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Chicago Bears']) }}" class="btn btn-xs btn-secondary">
                            <h3>Chicago Bears</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/lions.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Detroit Lions']) }}" class="btn btn-xs btn-secondary">
                            <h3>Detroit Lions</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/packers.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Green Bay Packers']) }}" class="btn btn-xs btn-secondary">
                            <h3>Green Bay Packers</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/vikings.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Minnesota Vikings']) }}" class="btn btn-xs btn-secondary">
                            <h3>Minnesota Vikings</h3>
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
                    <img src="{{ asset('img/NFC/falcons.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Atlanta Falcons']) }}" class="btn btn-xs btn-secondary">
                            <h3>Atlanta Falcons</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/panthers.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Carolina Panthers']) }}" class="btn btn-xs btn-secondary">
                            <h3>Carolina Panthers</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/saints.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['New Orleans Saints']) }}" class="btn btn-xs btn-secondary">
                            <h3>New Orleans Saints</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/buccaneers.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Tampa Bay Buccaneers']) }}" class="btn btn-xs btn-secondary">
                            <h3>Tampa Bay Buccaneers</h3>
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
                    <img src="{{ asset('img/NFC/cardinals.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Arizona Cardinals']) }}" class="btn btn-xs btn-secondary">
                            <h3>Arizona Cardinals</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/rams.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Los Angeles Rams']) }}" class="btn btn-xs btn-secondary">
                            <h3>Los Angeles Rams</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/49ers.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['San Francisco 49ers']) }}" class="btn btn-xs btn-secondary">
                            <h3>San Francisco 49ers</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 16rem;">
                    <img src="{{ asset('img/NFC/seahawks.png') }}" class="card-img-top" alt="..." height="250" width="250">
                    <div class="card-body">
                        <a href="{{ url('datosEquipo', ['Seattle Seahawks']) }}" class="btn btn-xs btn-secondary">
                            <h3>Seattle Seahawks</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection