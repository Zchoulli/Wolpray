<!--
/**
   * @name:        Product manager
   * @author:      Zaid - Patrik - Henry
   * @description: list all products of his club - manager view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->  
@extends('layouts.manager')

@section('content')
<table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>descripcion</th>
            <th>Price</th>
            <th>Imagen</th>
            <th>Catogory</th>
            <th>status</th>
            <th>club id</th>

        </tr>
    </thead>
    <tbody>
        @if(!empty($clubs) && $clubs->count())
            @foreach ($clubs as $club)
                @if($club->userid==auth()->user()->id)
                    @php $clubId = $club->id; @endphp
                    @foreach ($products as $product)
                        @if($product->clubid==$clubId)
                        <tr>
                            <td>{{ $product->productname}}</td>
                            <td>{{ $product->description}}</td>
                            <td>{{ $product->price}}</td>
                            <td>{{ $product->image}}</td>
                            <td>{{ $product->category}}</td>
                            <td>{{ $product->status}}</td>
                            <td>{{ $product->clubid}}</td>
                        </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif

    </tbody>

</table>
@endsection
