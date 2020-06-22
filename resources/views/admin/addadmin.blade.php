<!--
/**
   * @name:        Add admin
   * @author:      Zaid - Patrik - Henry
   * @description: add admin form - admin view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->   
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ action('AdminController@ConfirmAddAdmin') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <select name="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
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

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">{{ __('Birthdate') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="date" class="form-control{{ $errors->has('birthdate') ? ' is-invalid' : '' }}" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                @if ($errors->has('birthdate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Añadir Admin') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
