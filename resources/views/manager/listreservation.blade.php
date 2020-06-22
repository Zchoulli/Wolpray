@extends('layouts.manager')

@section('content')

<table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID DEL CLUB</th>
            <th>MESA RESERVADA</th>
            <th>DESCRIPCION</th>
            <th>ID DEL USUARIO</th>
            <th>FECHA</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($clubs) && $clubs->count())
            @foreach ($clubs as $club)
                @if($club->userid==auth()->user()->id)
                    @php $clubId = $club->id; @endphp
                    @foreach ($reservations as $reservation)
                        @if($reservation->clubid==$clubId)
                        <tr>
                            <td>{{ $reservation->clubid}}</td>
                            <td>{{ $reservation->numbertab}}</td>
                            <td>{{ $reservation->description}}</td>
                            <td>{{ $reservation->userid}}</td>
                            <td>{{ $reservation->date}}</td>
                        </tr>
                        @endif
                    @endforeach
                @endif
            @endforeach
        @endif

    </tbody>

</table>

{{-- <h1>Lista de Reservaciones de mesa </h1>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th>Mesa reservada</th>
                <th>Descripción</th>
                <th>Nombre club</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs as $club)
                @if($club->userid==auth()->user()->id)
                    @php $clubId = $club->id; @endphp
                        @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ $reservation->numbertab}}</td>
                                    <td>{{ $reservation->description}}</td>
                                    <td>{{ $reservation->clubname}}</td>
                                    <td>{{ $reservation->username}}</td>
                                    <td>{{ $reservation->email}}</td>
                                    <td>{{ $reservation->date}}</td>
                                </tr>

                        @endforeach
                @endif
        @endforeach
        </tbody>
    </table> --}}
@endsection
