<!--
/**
   * @name:        gmaps
   * @author:      Zaid - Patrik - Henry
   * @description: google maps of all locations of clubs in the database - client - home view
   * @version:     1.0
   * @date         26/05/2020
   * @param        none
   * @return       none
   */
--> 
<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJspiqE-Hc6ZWU68r0I-TMk2dBu8wo3GU">
    </script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


  	<style type="text/css">
    	#mymap {
      		height: 250px;
    	}
  	</style>


</head>
<body>



  <div id="mymap"></div>

  <script type="text/javascript">


    var locations = @php print_r(json_encode($clubs)) @endphp


    var mymap = new GMaps({
      el: '#mymap',
      lat: 41.3887901,
      lng: 2.1589899,
      zoom:11
    });


    $.each( locations, function( index, value ){

        /*var icon = {
    url: value.cover_url, // url
    scaledSize: new google.maps.Size(20, 20), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
};*/

	    mymap.addMarker({
	      lat: value.lat,
	      lng: value.lng,
	      title: value.clubname,
            //icon: icon,
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
