<!--
/**
   * @name:        Add club
   * @author:      Zaid - Patrik - Henry
   * @description: add club form - admin view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->   
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="alert alert-info" role="alert">
        Antes de añadir club, primero tienes que añadir el manager de club para administrarlo
     </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro Club') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ action('AdminController@ConfirmAddClub') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="clubname" class="col-md-4 col-form-label text-md-right">{{ __('Clubname') }}</label>

                            <div class="col-md-6">
                                <input id="clubname" type="text" class="form-control{{ $errors->has('clubname') ? ' is-invalid' : '' }}" name="clubname" value="{{ old('clubname') }}" required autofocus>

                                @if ($errors->has('clubname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('clubname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="streetname" class="col-md-4 col-form-label text-md-right">{{ __('Streetname') }}</label>

                            <div class="col-md-6">
                                <input id="streetname" type="text" class="form-control{{ $errors->has('streetname') ? ' is-invalid' : '' }}" name="streetname" value="{{ old('streetname') }}" required>

                                @if ($errors->has('streetname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('streetname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="streetnumber" class="col-md-4 col-form-label text-md-right">{{ __('Street number') }}</label>

                            <div class="col-md-6">
                                <input id="streetnumber" type="number" class="form-control{{ $errors->has('streetnumber') ? ' is-invalid' : '' }}" name="streetnumber" value="{{ old('streetnumber') }}" required>

                                @if ($errors->has('streetnumber'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('streetnumber') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

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
                            <label for="postal_code" class="col-md-4 col-form-label text-md-right">{{ __('Postal code') }}</label>

                            <div class="col-md-6">
                                <input id="postal_code" type="number" class="form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}" name="postal_code" value="{{ old('postal_code') }}" required>

                                @if ($errors->has('postal_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('postal_code') }}</strong>
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

                        <div class="form-group row">
                            <label for="ambience" class="col-md-4 col-form-label text-md-right">{{ __('Ambience') }}</label>

                            <div class="col-md-6">
                                <input id="ambience" type="text" class="form-control{{ $errors->has('ambience') ? ' is-invalid' : '' }}" name="ambience" value="{{ old('ambience') }}" required autofocus>

                                @if ($errors->has('ambience'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ambience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dress_code" class="col-md-4 col-form-label text-md-right">{{ __('Dress type') }}</label>

                            <div class="col-md-6">
                                <input id="dress_code" type="text" class="form-control{{ $errors->has('dress_code') ? ' is-invalid' : '' }}" name="dress_code" value="{{ old('dress_code') }}" required autofocus>

                                @if ($errors->has('dress_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dress_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cover_url" class="col-md-4 col-form-label text-md-right">{{ __('Image url') }}</label>

                            <div class="col-md-6">
                                <input id="cover_url" type="text" class="form-control{{ $errors->has('cover_url') ? ' is-invalid' : '' }}" name="cover_url" value="{{ old('cover_url') }}" required autofocus>

                                @if ($errors->has('cover_url'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cover_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="opening_time" class="col-md-4 col-form-label text-md-right">{{ __('Opening time') }}</label>

                            <div class="col-md-6">
                                <input id="opening_time" type="text" class="form-control{{ $errors->has('opening_time') ? ' is-invalid' : '' }}" name="opening_time" value="{{ old('opening_time') }}" required autofocus>

                                @if ($errors->has('opening_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('opening_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="closing_time" class="col-md-4 col-form-label text-md-right">{{ __('Closing time') }}</label>

                            <div class="col-md-6">
                                <input id="closing_time" type="text" class="form-control{{ $errors->has('closing_time') ? ' is-invalid' : '' }}" name="closing_time" value="{{ old('closing_time') }}" required autofocus>

                                @if ($errors->has('closing_time'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('closing_time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lat" class="col-md-4 col-form-label text-md-right">{{ __('Latitud') }}</label>

                            <div class="col-md-6">
                                <input id="lat" type="text" class="form-control{{ $errors->has('lat') ? ' is-invalid' : '' }}" name="lat" value="{{ old('lat') }}" required autofocus>

                                @if ($errors->has('lat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lng" class="col-md-4 col-form-label text-md-right">{{ __('Longitud') }}</label>

                            <div class="col-md-6">
                                <input id="lng" type="text" class="form-control{{ $errors->has('lng') ? ' is-invalid' : '' }}" name="lng" value="{{ old('lng') }}" required autofocus>

                                @if ($errors->has('lng'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lng') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="userid" class="col-md-4 col-form-label text-md-right">{{ __('Manager of club') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="userid">
                                    @foreach($users as $user)
                                      <option value="{{$user->id}}">{{$user->username}}-{{$user->name}}-{{$user->surname}}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Añadir club') }}
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
