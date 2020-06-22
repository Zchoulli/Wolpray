<!--
/**
   * @name:        Modify club
   * @author:      Zaid - Patrik - Henry
   * @description: the manager will be able to modify his club - manager view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->  
@extends('layouts.manager')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Modificar Club</h2></div>
                @if(!empty($clubs) && $clubs->count())
                    @foreach ($clubs as $club)
                        @if($club->userid==auth()->user()->id)
                            <form action="{{url('/manager/updateclub/'. $club->id) }}" method="POST">
                                @csrf
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <b>Nombre del club: </b>
                                        <input type="text" name="nombre" value="{{ $club->clubname }}" class="form-control" placeholder="Introduce un nombre">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Descripción: </b>
                                        <input type="text" name="descripcion" value="{{ $club->description }}" class="form-control" placeholder="Introduce una descripción">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Ambiente: </b>
                                        <input type="text" name="ambiente" value="{{ $club->ambience }}" class="form-control" placeholder="Introduce un ambiente">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Código de vestimenta: </b>
                                        <input type="text" name="codigoDeVestimenta" value="{{ $club->dress_code }}" class="form-control" placeholder="Introduce el código de vestimenta">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Calle/Plaza/Avenida: </b>
                                        <input type="text" name="callePlazaAvenida" value="{{ $club->streetname }}" class="form-control" placeholder="Introduce la calle/avenida/plaza">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Número de calle: </b>
                                        <input type="text" name="numeroDeCalle" value="{{ $club->streetnumber }}" class="form-control" placeholder="Introduce la número de calle">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Teléfono: </b>
                                        <input type="text" name="telefono" value="{{ $club->phone }}" class="form-control" placeholder="Introduce el teléfono">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Horario de apertura: </b>
                                        <input type="text" name="horarioDeApertura" value="{{ $club->opening_time }}" class="form-control" placeholder="Introduce el horario de apertura">
                                    </li>
                                    <li class="list-group-item">
                                        <b>Horario de cierre: </b>
                                        <input type="text" name="horarioDeCierre" value="{{ $club->closing_time }}" class="form-control" placeholder="Introduce el horario de cierre">
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6 col-md-6 text-left">
                                                <a class="btn btn-primary" href="{{action('ManagerController@clubManager')}}">Volver</a>
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 text-rigth">
                                                <button type="submit" class="btn btn-success">Modificar</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </form>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
