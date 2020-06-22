<!--
/**
   * @name:        Delete admin
   * @author:      Zaid - Patrik - Henry
   * @description: List all admins to delete - admin view
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
                <th>Delete</th>

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
                <td>
                <form method="post" class="delete_form" action="{{action('AdminController@destroy',$user->id)}}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
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
