<!--
/**
   * @name:        delete product
   * @author:      Zaid - Patrik - Henry
   * @description: delete product from database - manager view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
-->  
@extends('layouts.manager')

@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<table class="table table-hover">
    <h1>Borrar producto/ticket</h1>
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>descripcion</th>
            <th>Price</th>
            <th>Category</th>
            <th>status</th>
            <th>borrar</th>
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
                            <td>{{ $product->category}}</td>
                            <td>{{ $product->status}}</td>
                            <td>
                                <form method="post" class="delete_form" action="{{action('ManagerController@destroy',$product->id)}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif

    </tbody>

</table>
<script>
    $(document).ready(function(){
        $('.delete_form').on('submit',function(){
            if(confirm("Estas seguro que quieres borrarlo?")){
                return true;
            }
            else
            {
               return false;
            }
        });
    });
</script>
@endsection
