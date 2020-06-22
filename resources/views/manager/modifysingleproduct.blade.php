@extends('layouts.manager')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>Modificar producto</h2></div>
                    <form action="{{url('/manager/updateproduct/'. $product[0]->id) }}" method="POST">
                        @csrf
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b>Nombre del producto: </b>
                                <input type="text" name="nombre" value="{{ $product[0]->productname }}" class="form-control" placeholder="Introduce un nombre">
                            </li>
                            <li class="list-group-item">
                                <b>Descripción: </b>
                                <input type="text" name="descripcion" value="{{ $product[0]->description }}" class="form-control" placeholder="Introduce una descripción">
                            </li>
                            <li class="list-group-item">
                                <b>Categoria: </b>
                                <input type="text" name="categoria" value="{{ $product[0]->category }}" class="form-control" placeholder="Introduce una categoria">
                            </li>
                            <li class="list-group-item">
                                <b>Estado: </b>
                                <input type="text" name="estado" value="{{ $product[0]->status }}" class="form-control" placeholder="Introduce el estado">
                            </li>
                            <li class="list-group-item">
                                <b>Precio: </b>
                                <input type="number" name="precio" value="{{ $product[0]->price }}" class="form-control" placeholder="Introduce un precio">
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 text-left">
                                        <a class="btn btn-primary" href="{{action('ManagerController@modifyProduct')}}">Volver</a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 text-rigth">
                                        <button type="submit" class="btn btn-success">Modificar</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
