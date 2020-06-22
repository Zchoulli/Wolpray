<!--
/**
   * @name:        Profile manager
   * @author:      Zaid - Patrik - Henry
   * @description: show data of his account - manager view
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
                <div class="card-header"><h2>Perfil Manager</h2></div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Username: </b>{{auth()->user()->username}}</li>
                    <li class="list-group-item"><b>Nombre: </b>{{auth()->user()->name}}</li>
                    <li class="list-group-item"><b>Apellido: </b>{{auth()->user()->surname}}</li>
                    <li class="list-group-item"><b>Email: </b>{{auth()->user()->email}}</li>
                    <li class="list-group-item"><b>Telefóno: </b>{{auth()->user()->phone}}</li>
                    <li class="list-group-item"><b>Fecha de nacimiento: </b>{{auth()->user()->birthdate}}</li>
                    <li class="list-group-item"><b>Ciudad: </b>{{auth()->user()->city}}</li>
                    <li class="list-group-item"><b>Calle/Plaza/Avenida: </b>{{auth()->user()->streetname}}</li>
                    <li class="list-group-item"><b>Número de puerta: </b>{{auth()->user()->streetnumber}}</li>
                    <li class="list-group-item"><b>Código postal: </b>{{auth()->user()->postal_code}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
