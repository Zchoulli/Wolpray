<!--
/**
   * @name:        email
   * @author:      Zaid - Patrik - Henry
   * @description: Send email to reset form - home view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.login')
@section('content')
<div class="limiter">
    <div class="container-login100">
       <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
             <img src="../images/logos/wolpraylogo.png" alt="IMG">
          </div>
          <form class="login100-form validate-form" method="POST" action="{{ route('password.email') }}">
             @csrf
             <span class="login100-form-title">
             Recuperar Contraseña
             </span>
             @if (session('status'))
                 <div class="alert alert-success" role="alert">
                     {{ session('status') }}
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

             <div class="container-login100-form-btn">
                <button type="submit" class="login100-form-btn">
                {{ __('Enviar enlace de recuperación')
                 }}
                </button>
             </div>
             <br><br><br><br><br><br><br>
          </form>
       </div>
    </div>
 </div>
 <!--===============================================================================================CSS===============================================================================================-->

 <!--===============================================================================================JS===============================================================================================-->
 <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


@endsection
