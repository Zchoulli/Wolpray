<!--
/**
   * @name:        Show
   * @author:      Zaid - Patrik - Henry
   * @description: Show the view of each club by id with his products and data amd his location in google maps - client view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
@extends('layouts.clubsclient')
@section('content')
<br><br><br><br><br><br>
<section class="container">
    <br><br>
        <h1 class="text-center">{{$club->clubname}}</h1>
</section>

<section class="container">
    <br><br>
    <div class="row">
    <img src="../../{{$club->cover_url}}" width="1300" height="300" class="rounded-circle">
</div>
</section>


<section class="container" id="about">
<br><br><br>
<div class="container">
<h1 class="text-center">Sobre Nosotros</h1>
</div>
<br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 image-element">
                <div class="img-wrap" style="height: 100%; width: 100%;">
                <h2 class="mbr-section-title mbr-fonts-style align-center display-5 text-center">Información</h2>
                <p>Telefono : {{$club->phone}}</p>
                <p>Ambience : {{$club->ambience}}</p>
                <p>Dress : {{$club->dress_code}}</p>
                <p>Hora de apertura : {{$club->opening_time}}</p>
                <p>Hora de cierre : {{$club->closing_time}}</p>

                </div>
            </div>
            <div class="col-md-10 col-lg-6 text-element">
                <h2 class="mbr-section-title mbr-fonts-style align-center display-5 text-center">Descripción</h2>
            <h5>{{$club->description}}</h5>
            </div>
        </div>
    </div>
</section>

<section class="container" id="products">
    <br><br><br>
    <div class="container">
    <h1 class="text-center">Productos</h1>
    </div>
    <br>
<div class="row">
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Price</th>

            </tr>
        </thead>
        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->productname}}</td>
                                <td>{{ $product->price}}</td>
                            </tr>
                        @endforeach

        </tbody>

    </table>

</section>

<div class="row">

<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJspiqE-Hc6ZWU68r0I-TMk2dBu8wo3GU">
    </script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


  	<style type="text/css">
    	#mapclub {
      		width: 1100px;
      		height: 300px;
    	}
  	</style>


</head>
<body>

<section id="mapa" class="container">
    <div class="container">
        <div class="row">
      <div id="mapclub"></div>

        </div>
</section>
  <script type="text/javascript">


    var locations = @php print_r(json_encode($clubmap)) @endphp


    var mymap = new GMaps({
      el: '#mapclub',
      lat: 41.3887901,
      lng: 2.1589899,
      zoom:11
    });


    $.each( locations, function( index, value ){
	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      title: value.clubname,
	      infoWindow: {
           content:'<h5>'+value.clubname +'<h5>' + '<p>'+ value.streetname+' ' +value.streetnumber + ',' +value.postal_code + '<p>'
       },
        mouseover: function(){
            (this.infoWindow).open(this.map, this);
        },
        mouseout: function(){
            this.infoWindow.close();
        }
	    });
   });


  </script>




</div>

<br>
<footer class="page-footer font-small blue pt-4" style="background-color: lavender">
    <!-- Footer Links -->
    <div class="text-center text-md-left container">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
                <!-- Content -->
                <h5 class="text-uppercase">SOBRE NOSOTROS</h5>
                <p>
                    Los mejores ambientes: una variadísima oferta musical y unas impresionantes fiestas con espectáculos de primera. Aquí se vive la música y la diversión. Baila hasta el amanecer o pasa una noche relajada con tus
                    amigos: en las zonas de Barcelona, todo es posible.
                </p>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3" />

            <!-- Grid column -->

            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <img src="../../images/logos/wolpray-logo.png" alt="">
            </div>

            <div class="col-md-3 mb-md-0 mb-3">
                <!-- Links -->
                <h5 class="text-uppercase">Iconos de redes sociales</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.facebook.com/">facebook</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/">instagram</a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/">twitter</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/">linkedin</a>
                    </li>
                </ul>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        © 2020 Copyright:
        <a href="#">WolPray</a>
    </div>
    <!-- Copyright -->
</footer>

</body>
