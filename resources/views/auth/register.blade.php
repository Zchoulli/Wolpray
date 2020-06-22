<!--
/**
   * @name:        register
   * @author:      Zaid - Patrik - Henry
   * @description: Register form - home view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.login')
@section('content')
<br><br><br>
<div class="limiter">
    <div class="container-login100">
       <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
           <a href="{{action('HomeController@index')}}">
               <img src="images/logos/wolpraylogo.png" alt="IMG" title="Volver a la página principal." href="{{ url('/') }}">
           </a>
        </div>
          <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
             @csrf
             <span class="login100-form-title">
             Registro Wolpray
             </span>
             <div class="wrap-input100 validate-input">
                <input id="name" type="text" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" required autofocus>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('name'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('name') }}
             </span>
              </div>
             @endif

             <div class="wrap-input100 validate-input">
                <input id="surname" type="text" class="input100 {{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" placeholder="Apellido" required autofocus>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('surname'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('surname') }}
             </span>
              </div>
             @endif

             <div class="wrap-input100 validate-input">
                <input id="username" type="text" class="input100 {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Nombre de usuario" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-user" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('username'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('username') }}
             </span>
              </div>
             @endif

             <div class="wrap-input100 validate-input">
                <input id="email" type="email" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('email'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('email') }}
             </span>
              </div>
             @endif

             <div class="wrap-input100 validate-input">
                <input id="password" type="password" class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('password'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('password') }}
             </span>
              </div>
             @endif

             <div class="wrap-input100 validate-input">
                <input id="password-confirm" type="password" class="input100" name="password_confirmation" placeholder="Confirmar contraseña" required>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
             </div>
             <div class="wrap-input100 validate-input">
                <select name="city" class="input100 {{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
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
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-building" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('city'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('city') }}
             </span>
              </div>
             @endif

             <div class="wrap-input100 validate-input">
                <input id="birthdate" type="date" class="input100 {{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}" placeholder="Fecha de nacimiento" required autofocus>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('birthdate'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('birthdate') }}
             </span>
              </div>
             @endif

             <div class="wrap-input100 validate-input">
                <input id="phone" type="text" class="input100 {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Teléfono" required autofocus>
                <span class="focus-input100"></span>
                <span class="symbol-input100">
                <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
             </div>

             @if ($errors->has('phone'))
             <div>
             <span  class="text-danger" role="alert">
             {{ $errors->first('phone') }}
             </span>
              </div>
             @endif

             <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                {{ __('Registrarse') }}
                </button>
             </div>
             <div class="text-center p-t-12">
                @if (Route::has('password.request'))
                <a class="txt2" href="{{ route('login') }}">
                ¿Ya tienes una cuenta? {{ __('Ingresa') }}
                </a>
                @endif
             </div>
          </form>
       </div>
    </div>
 </div>
 <!--===============================================================================================CSS===============================================================================================-->
 <link href="{{ asset('fonts/forms/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
 <link href="{{ asset('vendor/forms/animate/animate.css') }}" rel="stylesheet">
 <!--===============================================================================================JS===============================================================================================-->
 <script src="vendor/forms/bootstrap/js/popper.js"></script>
 <script src="vendor/forms/select2/select2.min.js"></script>
 <script src="{{ asset('js/forms/main.js') }}"></script>
@endsection
