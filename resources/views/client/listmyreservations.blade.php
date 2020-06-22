<!--
/**
   * @name:        List reservation
   * @author:      Zaid - Patrik - Henry
   * @description: List reservation of client logged - client view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.client')
@section('content')
<br><br><br>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/tables/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/tables/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/tables/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/tables/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/tables/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/tables/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/tables/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/tables/main.css')}}">
<!--===============================================================================================-->
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">

						<tbody>
                            @if(!empty($reservations) && $reservations->count())
                            <table>
                                <thead>
                                    <tr class="table100-head">
                                        <th class="column1">Fecha</th>
                                        <th class="column2">Club</th>
                                        <th class="column3">Número de mesa</th>
                                        <th class="column1">Descripción</th>
                                    </tr>
                                </thead>
                                @foreach ($reservations as $row)
                                    @if($row->userid == auth()->user()->id)
                                        <tr>
                                            <td class="column1">{{ $row->date }}</td>
                                            @foreach ($clubs as $club)
                                                @if($club->id == $row->clubid)
                                                    <td class="column2">{{ $club->clubname }}</td>
                                                @endif
                                            @endforeach
                                            <td class="column3">{{ $row->numbertab }}</td>
                                            <td class="column1">{{ $row->description }}</td>
                                        </tr>
                                    @else
                                        <td class="column1 text-center">No hizo ninguna reserva {{auth()->user()->username}}</td>
                                        @php break; @endphp
                                    @endif
                                @endforeach
                                @else
                                <br><br>
                                <h1 class="column1 text-center">{{auth()->user()->username}} NO HAS NINGUN RESERVA</h1>
                            @endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="{{asset('vendor/tables/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/tables/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/tables/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/tables/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('js/tables/main.js')}}"></script>
<!--===============================================================================================-->
	<script src="vendor/tables/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tables/bootstrap/js/popper.js"></script>
	<script src="vendor/tables/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tables/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/tables/main.js"></script>
@endsection
