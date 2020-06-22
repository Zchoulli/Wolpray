<!--
/**
   * @name:        list clubs
   * @author:      Zaid - Patrik - Henry
   * @description: List all clubs - admin view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.admin')
@section('content')
List clubs

    <h1>Clubs BD</h1>
    <h3>Numeros de clubs : {{$clubs->total()}}</h3>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>descripcion</th>
                <th>street name</th>
                <th>street number</th>
                <th>ambience</th>
                <th>Dress</th>
                <th>Manager</th>

            </tr>
        </thead>
        <tbody>
            @if(!empty($clubs) && $clubs->count())
            @foreach ($clubs as $club)
            <tr>
                <td>{{ $club->clubname}}</td>
                <td>{{ $club->description}}</td>
                <td>{{ $club->streetname}}</td>
                <td>{{ $club->streetnumber}}</td>
                <td>{{ $club->ambience}}</td>
                <td>{{ $club->dress_code}}</td>
                <td>{{ $club->userid}}</td>
                <td>

            </tr>
            @endforeach
            @else
            <tr>
                <td colspan="10">There are no clubs in the database.</td>
            </tr>
        @endif
        </tbody>

    </table>
    <div align="center">{!! $clubs->links() !!}</div>
    <br/>

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
