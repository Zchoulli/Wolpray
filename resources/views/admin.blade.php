<!--
/**
   * @name:        admin welcome page
   * @author:      Zaid - Patrik - Henry
   * @description: show the numbers of admins, managers and clients in the database - admin view
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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                    <div class="alert alert-success">
                    <p>{{$message}}</p>
                    </div>
                    @endif
                    Hola {{ Auth::user()->username }}!
                    <h1>Numero de administradores : {{$admin}}</h1>
                    <h1>Numero de managers : {{$manager}}</h1>
                    <h1>Numero de clientes : {{$client}}</h1>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
