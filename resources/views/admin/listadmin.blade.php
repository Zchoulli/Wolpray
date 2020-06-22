<!--
/**
   * @name:        listadmin
   * @author:      Zaid - Patrik - Henry
   * @description: List all admins - admin view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->  
@extends('layouts.admin')
@section('content')
List admin

    <h1>Admin BD</h1>
    <h3>Numeros de admins : {{$users->total()}}</h3>
    <table class="table table-hover" >
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Username</th>
                <th>Email</th>
                <th>Contaseña</th>
                <th>Telefono</th>

            </tr>
        </thead>
        <tbody>
            @if(!empty($users) && $users->count())
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name}}</td>
                <td>{{ $user->surname}}</td>
                <td>{{ $user->username}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->password}}</td>
                <td>{{ $user->phone}}</td>

            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">There are no users in the database.</td>
            </tr>
        @endif
        </tbody>

    </table>
    <div align="center">{!! $users->links() !!}</div>
    <br/>

@endsection
