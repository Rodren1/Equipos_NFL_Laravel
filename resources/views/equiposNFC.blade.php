@extends('layouts.layout_principal')
@section('titulo', 'Equipos de la NFC')

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