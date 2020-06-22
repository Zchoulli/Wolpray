<!DOCTYPE html>
<html>
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



  <div id="mapclub"></div>

  <script type="text/javascript">


    var locations = @php print_r(json_encode($club)) @endphp


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


</body>
