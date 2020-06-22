<!--
/**
   * @name:        delete client
   * @author:      Zaid - Patrik - Henry
   * @description: Client logged to delete - client view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.client')
@section('content')
<div class="container">
    <h1 class="text-center">Borrar usuario</h1>
    <div>
        <p>¿Está seguro que quiere borrar su usuario? {{auth()->user()->id}}<p>
        <form method="POST" action="{{action('ClientController@destroy', auth()->user()->id)}}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete" />
            <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </div>
<div>
@endsection
