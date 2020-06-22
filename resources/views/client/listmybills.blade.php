<!--
/**
   * @name:        List bills
   * @author:      Zaid - Patrik - Henry
   * @description: List bills of client logged - client view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.client')
@section('content')
<br><br>
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
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Club</th>
								<th class="column2">Producto</th>
								<th class="column3">Price</th>
							</tr>
						</thead>
						<tbody>
                            @if(!empty($invoices) && $invoices->count())
                            @foreach ($invoices as $row)
                                @if($row->userid == auth()->user()->id)
                                    <tr>
                                        @foreach ($clubs as $club)
                                            @if($club->id == $row->clubid)
                                                <td class="column1">{{ $club->clubname }}</td>
                                            @endif
                                        @endforeach
                                        @foreach ($products as $product)
                                            @if($product->id == $row->productid)
                                                <td class="column2">{{ $product->productname }}</td>
                                            @endif
                                        @endforeach
                                        <td class="column1">{{ $row->totalprice }} €</td>
                                    </tr>
                                @endif
                            @endforeach
                            @else
                            <td class="column1 text-center">No tiene ninguna factura {{auth()->user()->username}}</td>
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
