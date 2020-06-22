@extends('layouts.admin')
@section('content')
<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Perfil Administrador</p>
        </div>
                @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
        <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="h5">ID:</a>
                            <input type="text" name="id" value="{{auth()->user()->id}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <a class="h5">Nombre:</a>
                            <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <a class="h5">Apellidos:</a>
                            <input type="text" name="surname" value="{{auth()->user()->surname}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <a class="h5">Nick:</a>
                            <input type="text" name="username" value="{{auth()->user()->username}}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="h5">Tel:</a>
                            <input type="text" name="tel" value="{{auth()->user()->phone}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <a class="h5">Calle:</a>
                            <input type="text" name="street" value="{{auth()->user()->streetname}}" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                            <a class="h5">Numero de direccion:</a>
                            <input type="text" name="numberst" value="{{auth()->user()->streetnumber}}" class="form-control"  disabled>
                        </div>
                        <div class="form-group">
                            <a class="h5">Codigo postal:</a>
                            <input type="text" name="postalcode" value="{{auth()->user()->postal_code}}" class="form-control"  disabled>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a class="h5">Ciudad:</a>
                    <select name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{auth()->user()->city}}" disabled>
                        <option  value="{{auth()->user()->city}}" >{{auth()->user()->city}}</option>
                      </select>
                </div>
                <div class="row">
                        <div class="col">
                            <a class="btn btn-primary" href="{{ url('admin') }}">Volver </a>
                        </div>
                        <div class="col">
                            <a class="btn btn-primary" href="{{action('AdminController@ViewModifyAdmin')}}">Editar</a>
                        </div>
                </div>
        </div>
    </div>
</div>
@endsection
