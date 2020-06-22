<!--
/**
   * @name:        login
   * @author:      Zaid - Patrik - Henry
   * @description: Login form - home view
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
         <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-title">
            Login Wolpray
            </span>
            <div class="wrap-input100 validate-input" @if ($errors->has('email')) data-validate="Alguno de los dos campos son incorrectos." @endif>
               <input id="email" type="email" class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
               <span class="focus-input100"></span>
               <span class="symbol-input100">
               <i class="fa fa-envelope" aria-hidden="true"></i>
               </span>
            </div>




            <div class="wrap-input100 validate-input">
               <input id="password" type="password" class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>
               <span class="focus-input100"></span>
               <span class="symbol-input100">
               <i class="fa fa-lock" aria-hidden="true"></i>
               </span>
               @if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
               </span>
               @endif
            </div>

            @if ($errors->has('email'))
            <div>
            <span  class="text-danger" role="alert">
            {{ $errors->first('email') }}
            </span>
             </div>
            @endif

            <div class="container-login100-form-btn">
               <button type="submit" class="login100-form-btn">
               {{ __('Login') }}
               </button>
            </div>



            <div class="text-center p-t-12">
               @if (Route::has('password.request'))
               <a class="txt2" href="{{ route('password.request') }}">
               {{ __('¿Olvidó su contraseña?') }}
               </a>
               @endif
            </div>
            <div class="text-center p-t-136">
               <a class="txt2" href="{{ route('register') }}">
               Crea tu cuenta
               <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
               </a>
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
</body>
@endsection
