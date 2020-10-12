
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

            {{-- <script type="text/javascript">

              var geocoder = new google.maps.Geocoder();
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(6.5244, 3.3792),
                mapTypeId: google.maps.MapTypeId.ROADMAP
                });
              
              
                function codeAddress() {
                var address = document.getElementById('address1').value;
                geocoder.geocode( { 'address': address}, function(results, status) {
                  if (status == 'OK') {
                  map.setCenter(results[0].geometry.location);
                  
                  
              
                  latitude_point = results[0].geometry.location.lat() 
                  longitude_point = results[0].geometry.location.lng() 
              
              
                  var locations = [
                ['My address', latitude_point, longitude_point, 1],
                ['Store address', 6.577120, 3.366820, 2],
                 
                ];
              
                getPrice = (getDistanceFromLatLonInKm(6.577120, 3.366820, latitude_point, longitude_point)*25).toFixed(1);
                alert(getPrice);
                naira = "The estimated price is ₦"
                var final_result = naira.concat(getPrice);
            
              //   alert(final_result);
            
                var display=document.getElementById("display")
                  display.innerHTML=final_result;
              
              
              
              function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
                var R = 6371; // Radius of the earth in km
                var dLat = deg2rad(lat2-lat1);  // deg2rad below
                var dLon = deg2rad(lon2-lon1); 
                var a = 
                Math.sin(dLat/2) * Math.sin(dLat/2) +
                Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
                Math.sin(dLon/2) * Math.sin(dLon/2)
                ; 
                var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
                var d = R * c; // Distance in km
                return d;
              }
              
              function deg2rad(deg) {
                return deg * (Math.PI/180)
              }
              
              
              
              
                var infowindow = new google.maps.InfoWindow();
              
                var marker, i;
              
                for (i = 0; i < locations.length; i++) {  
                marker = new google.maps.Marker({
                  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                  map: map
                });
              
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                  return function() {
                  infowindow.setContent(locations[i][0]);
                  infowindow.open(map, marker);
                  }
                })(marker, i));
                }
              
                  } else {
                  alert('Something went wrong, Fill in the correct details and retry!');
                  }
                });
              
                
                
              
                
               
                
                }
              
              
              
              
              
              </script> --}}
              <script>
                function test(){
                  alert(getElementById('test').value);
                }
              </script>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Meanmenu JS -->
        <script src="{{asset('js/meanmenu.min.js')}}"></script>
        <!-- Owl carousel JS -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- Magnific JS -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

        <!-- Odometer JS -->
        <script src="{{asset('js/odometer.min.js')}}"></script>
        <script src="{{asset('js/jquery.appear.js')}}"></script>
        <!-- Form Validator JS -->
		<script src="{{asset('js/form-validator.min.js')}}"></script>
		<!-- Contact JS -->
		<script src="{{asset('js/contact-form-script.js')}}"></script>
		<!-- Ajaxchimp JS -->
		<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <!--Animate JS -->
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script>
              new WOW().init();
              </script>
        <!-- Custom JS -->
        <script src="{{asset('js/custom.js')}}"></script>
    </body>

</html>