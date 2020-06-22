<!--
/**
   * @name:        Add ticket
   * @author:      Zaid - Patrik - Henry
   * @description: add ticket form - manager view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->  
@extends('layouts.manager')

@section('content')
<div class="container">
    @if($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{$message}}</p>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Añadir ticket') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ action('ManagerController@ConfirmAddTicket') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="productname" class="col-md-4 col-form-label text-md-right">{{ __('Nombre producto') }}</label>

                            <div class="col-md-6">
                                <input id="productname" type="text" class="form-control{{ $errors->has('productname') ? ' is-invalid' : '' }}" name="productname" value="{{ old('productname') }}" required autofocus>

                                @if ($errors->has('productname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('productname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                            <input type="hidden" name="category" value="Ticket">

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>

                            <div class="col-md-6">
                                <input id="birthdate" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image url') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="text" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required autofocus>

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if(!empty($clubs) && $clubs->count())
                        @foreach ($clubs as $club)
                            @if($club->userid==auth()->user()->id)
                            <input id="clubid" type="hidden" class="form-control{{ $errors->has('clubid') ? ' is-invalid' : '' }}" name="clubid" value="{{$club->id}}" required autofocus>
                            @endif
                        @endforeach
                    @endif


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Añadir Product') }}
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
