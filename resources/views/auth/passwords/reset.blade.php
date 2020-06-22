<!--
/**
   * @name:        reset
   * @author:      Zaid - Patrik - Henry
   * @description: new data of client form - home view
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
                <img src="{{ asset('images/logos/wolpraylogo.png') }}" alt="IMG" title="Volver a la página principal." href="{{ url('/') }}">
            </a>
         </div>
         <form class="login100-form validate-form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <span class="login100-form-title">
            Resetear contraseña
            </span>
            <div class="wrap-input100 validate-input" @if ($errors->has('email')) data-validate="Alguno de los dos campos son incorrectos." @endif>
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
            <div class="container-login100-form-btn">
               <button type="submit" class="login100-form-btn">
                {{ __('Resetear contraseña') }}
               </button>
            </div>
            <br><br><br><br><br><br>
         </form>
      </div>
   </div>
</div>
 <!--===============================================================================================CSS===============================================================================================-->
 <link href="{{ asset('css/forms/util.css') }}" rel="stylesheet">
 <link href="{{ asset('css/forms/main.css') }}" rel="stylesheet">
 <link href="{{ asset('vendor/forms/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 <link href="{{ asset('fonts/forms/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
 <link href="{{ asset('vendor/forms/animate/animate.css') }}" rel="stylesheet">
 <link href="{{ asset('vendor/forms/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">
 <link href="{{ asset('vendor/forms/select2/select2.min.css') }}" rel="stylesheet">
 <!--===============================================================================================JS===============================================================================================-->
 <script src="{{ asset('vendor/forms/jquery/jquery-3.2.1.min.js') }}"></script>
 <script src="vendor/forms/bootstrap/js/popper.js"></script>
 <script src="vendor/forms/bootstrap/js/bootstrap.min.js"></script>
 <script src="vendor/forms/select2/select2.min.js"></script>
 <script src="vendor/forms/tilt/tilt.jquery.min.js"></script>
 <script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
 </script>
 <script src="js/forms/main.js"></script>
</body>
@endsection
