@extends('layouts.admin')
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
<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>Modificar Administrador</p>
        </div>
        @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
        <div class="form-content">
            <form action="{{url('/admin/updateprofileadmin/'. auth()->user()->id) }}" method="POST">
            @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="h5">ID:</a>
                            <input type="text" name="id" value="{{auth()->user()->id}}" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <a class="h5">Nombre:</a>
                            <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" placeholder="Introduzca su nuevo nombre" required>
                        </div>
                        <div class="form-group">
                            <a class="h5">Apellidos:</a>
                            <input type="text" name="surname" value="{{auth()->user()->surname}}" class="form-control" placeholder="Introduzca su nuevo apellido" required>
                        </div>
                        <div class="form-group">
                            <a class="h5">Nick:</a>
                            <input type="text" name="username" value="{{auth()->user()->username}}" class="form-control" placeholder="Introduzca su nuevo nick " required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="h5">Tel:</a>
                            <input type="text" name="phone" value="{{auth()->user()->phone}}" class="form-control" placeholder="Introduzca su nuevo telefono " required>
                        </div>
                        <div class="form-group">
                            <a class="h5">Calle:</a>
                            <input type="text" name="street" value="{{auth()->user()->streetname}}" class="form-control" placeholder="Introduzca su nueva direccion " required>
                        </div>
                        <div class="form-group">
                            <a class="h5">Numero de direccion:</a>
                            <input type="text" name="numberst" value="{{auth()->user()->streetnumber}}" class="form-control" placeholder="Introduzca su nuevo numero de direccion " required>
                        </div>
                        <div class="form-group">
                            <a class="h5">Codigo postal:</a>
                            <input type="text"  name="postal_code" value="{{auth()->user()->postal_code}}" class="form-control" placeholder="Introduzca su el nuevo codigo postal " required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <a class="h5">Ciudad:</a>
                    <select name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{auth()->user()->city}}" required autofocus>
                        <option value='A Coruña' >A Coruña</option>
                        <option value='álava'>álava</option>
                        <option value='Albacete' >Albacete</option>
                        <option value='Alicante'>Alicante</option>
                        <option value='Almería' >Almería</option>
                        <option value='Asturias' >Asturias</option>
                        <option value='ávila' >Ávila</option>
                        <option value='Badajoz' >Badajoz</option>
                        <option selected value='Barcelona'>Barcelona</option>
                        <option value='Burgos' >Burgos</option>
                        <option value='Cáceres' >Cáceres</option>
                        <option value='Cádiz' >Cádiz</option>
                        <option value='Cantabria' >Cantabria</option>
                        <option value='Castellón' >Castellón</option>
                        <option value='Ceuta' >Ceuta</option>
                        <option value='Ciudad Real' >Ciudad Real</option>
                        <option value='Córdoba' >Córdoba</option>
                        <option value='Cuenca' >Cuenca</option>
                        <option value='Gerona' >Gerona</option>
                        <option value='Girona' >Girona</option>
                        <option value='Las Palmas' >Las Palmas</option>
                        <option value='Granada' >Granada</option>
                        <option value='Guadalajara' >Guadalajara</option>
                        <option value='Guipúzcoa' >Guipúzcoa</option>
                        <option value='Huelva' >Huelva</option>
                        <option value='Huesca' >Huesca</option>
                        <option value='Jaén' >Jaén</option>
                        <option value='La Rioja' >La Rioja</option>
                        <option value='León' >León</option>
                        <option value='Lleida' >Lleida</option>
                        <option value='Lugo' >Lugo</option>
                        <option value='Madrid' >Madrid</option>
                        <option value='Malaga' >Málaga</option>
                        <option value='Mallorca' >Mallorca</option>
                        <option value='Melilla' >Melilla</option>
                        <option value='Murcia' >Murcia</option>
                        <option value='Navarra' >Navarra</option>
                        <option value='Orense' >Orense</option>
                        <option value='Palencia' >Palencia</option>
                        <option value='Pontevedra'>Pontevedra</option>
                        <option value='Salamanca'>Salamanca</option>
                        <option value='Segovia' >Segovia</option>
                        <option value='Sevilla' >Sevilla</option>
                        <option value='Soria' >Soria</option>
                        <option value='Tarragona' >Tarragona</option>
                        <option value='Tenerife' >Tenerife</option>
                        <option value='Teruel' >Teruel</option>
                        <option value='Toledo' >Toledo</option>
                        <option value='Valencia' >Valencia</option>
                        <option value='Valladolid' >Valladolid</option>
                        <option value='Vizcaya' >Vizcaya</option>
                        <option value='Zamora' >Zamora</option>
                        <option value='Zaragoza'>Zaragoza</option>
                      </select>
                </div>
                <div class="row">

                    <div class="col-xs-6 col-sm-6 col-md-6 ">
                        <center>
                        <a class="btn btn-primary" href="{{action('AdminController@profileAdmin')}}">Volver</a>
                        </center>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <center>
                        <button type="submit" class="btn btn-success">Modificar</button>
                        </center>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
