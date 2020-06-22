<!--
/**
   * @name:        Club manager
   * @author:      Zaid - Patrik - Henry
   * @description: The club information - manager view
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
                <div class="card-header"><h2>Mi Club</h2></div>
                @if(!empty($clubs) && $clubs->count())
                    @foreach ($clubs as $club)
                        @if($club->userid==auth()->user()->id)
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Nombre del club: </b>{{ $club->clubname }}</li>
                                <li class="list-group-item"><b>Descripción: </b>{{ $club->description }}</li>
                                <li class="list-group-item"><b>Ambiente: </b>{{ $club->ambience }}</li>
                                <li class="list-group-item"><b>Código de vestimenta: </b>{{ $club->dress_code }}</li>
                                <li class="list-group-item"><b>Calle/Plaza/Avenida: </b>{{ $club->streetname }}</li>
                                <li class="list-group-item"><b>Número de calle: </b>{{ $club->streetnumber }}</li>
                            </ul>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
