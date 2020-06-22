<!--
/**
   * @name:        Modify manager
   * @author:      Zaid - Patrik - Henry
   * @description: the manager will be able to modify his club account - manager view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->  
@extends('layouts.manager')
@section('content')
<script>
    function showPassword() {
        var x = document.getElementById("contrasenya");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<div class="container">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Modificar Manager</h2></div>
                    <form action="{{url('/manager/updatemanager/'. auth()->user()->id) }}" method="POST">
                        @csrf
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b>Username: </b>
                                <input type="text" name="username" value="{{auth()->user()->username}}" class="form-control" placeholder="Introduce un username">
                            </li>

                            @if ($errors->has('username'))
                                    <span  role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            <li class="list-group-item">
                                <b>Nombre: </b>
                                <input type="text" name="nombre" value="{{auth()->user()->name}}" class="form-control" placeholder="Introduce un nombre">
                            </li>

                            @if ($errors->has('nombre'))
                                    <span  role="alert">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            <li class="list-group-item">
                                <b>Apellido: </b>
                                <input type="text" name="apellido" value="{{auth()->user()->surname}}" class="form-control" placeholder="Introduce un apellido">
                            </li>

                            @if ($errors->has('apellido'))
                                    <span  role="alert">
                                        <strong>{{ $errors->first('apellido') }}</strong>
                                    </span>
                                @endif
                            <li class="list-group-item">
                                <b>Teléfono: </b>
                                <input type="text" name="telefono" value="{{auth()->user()->phone}}" class="form-control" placeholder="Introduce un teléfono">
                            </li>

                            @if ($errors->has('telefono'))
                                    <span  role="alert">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            <!--
                            <li class="list-group-item">
                                <b>Password: </b>
                                <input type="password" id="contrasenya" name="numeroDeCalle" value="{{auth()->user()->password}}" class="form-control" placeholder="Introduce la número de calle">
                                <input type="checkbox" onclick="showPassword()">
                                Mostrar contraseña
                            </li>
                            -->
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 text-left">
                                        <a class="btn btn-primary" href="{{action('ManagerController@profileManager')}}">Volver</a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 text-rigth">
                                        <button type="submit" class="btn btn-success">Modificar</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
