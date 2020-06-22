@extends('layouts.admin')
@section('content')
{{-- {!! Form::open(['route' =>'AdminController.listBills', 'method' =>'GET', 'class' =>'navbar-form navbar-left pull-right', 'role'='search']) !!}
    <div class="form-group">
        {!! Form::text('name',null, ['class' =>'form-control', 'placeholder' =>'Nombre club a buscar']) !!}
    </div>
    <button type="submit" class="btn btn-success"> Buscar</button>
{!! Form::close() !!} --}}
<table class="table table-hover">
    <thead class="thead-light">
                <th>Nombre Club</th>
                <th>Manager</th>
                <th>E-mail</th>
                <th>Direccion Club</th>
                <th>Nº </th>
                <th>Codigo postal</th>
                <th>Ciudad</th>
                <th>Fecha</th>
                <th>Balance</th>
    </thead>
                @foreach($bills as $bill)
                <tr>
                    <td>{{ $bill->nameClub}}</td>
                    <td>{{ $bill->manager}}</td>
                    <td>{{ $bill->email}}</td>
                    <td>{{ $bill->streetname}}</td>
                    <td>{{ $bill->streetnumber}}</td>
                    <td>{{ $bill->postal_code}}</td>
                    <td>{{ $bill->city}}</td>
                    <td>{{ $bill->date}}</td>
                    <td>{{ $bill->balance}}</td>
                </tr>
                @endforeach
    <tbody>
    </tbody>
@endsection
