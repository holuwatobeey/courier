@extends('layouts.mainLayout')
@section('content')
        <!-- Page banner Area -->
        <div class="page-banner bg-3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="page-content">
                                <h2>Pricing</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>Pricing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br/>
            <!-- End Page banner Area -->
            <div class="d-flex justify-content-center">
                <div style="margin-bottom:2%;" class="col-md-8">
                    <h2 class="text-center">get cost estimate</h2>
                    <div class="form-row">
                        {{-- <div class="col-md-6"> --}}
                                {{-- <label for="">Drop-Off Location</label>
                                <input type="text" class="form-control" id="d_loc1" placeholder="Drop-Off Location" value="" name="d_loc1" required><br/> --}}

                        {{-- <select class="form-control" value="{{ old('d_loc1') }}" name="d_loc1" id="d_loc1" required>
                            <option selected>Select Drop-Off Location</option>
                            <option value="Agege">Agege</option>
                            <option value="Alimosho">Alimosho</option>
                            <option value="Amuwo Odofin">Amuwo Odofin</option>
                            <option value="Apapa">Apapa</option>
                            <option value="Badagry">Badagry</option>
                            <option value="Eti Osa">Eti Osa</option>
                            <option value="Epe">Epe</option>
                            <option value="Ibeju Lekki">Ibeju Lekki</option>
                            <option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
                            <option value="Ikeja">Ikeja</option>
                            <option value="Ikorodu">Ikorodu</option>
                            <option value="Isheri">Isheri</option>
                            <option value="Kosofe">Kosofe</option>
                            <option value="Lagos Island">Lagos Island</option>
                            <option value="Lagos Mainland">Lagos Mainland</option>
                            <option value="Mushin">Mushin</option>
                            <option value="Oshodi">Oshodi</option>
                            <option value="Ojo">Ojo</option>
                            <option value="Somolu">Somolu</option>
                            <option value="Surulere">Surulere</option>
                        </select><br/> --}}
                        {{-- </div><br/> --}}
                        <div class="col-md-12">
                                <label for="">Drop-Off Address</label>
                        <input type="text" class="form-control" id="address1" placeholder="Drop-Off Address" value="{{ old('address1') }}" name="address1" required><br/>
                        <input type="button"  style="padding:1% !important; border-radius:20px;" class="btn btn-info" value="Get cost estimate"  onclick="codeAddress()"> <br/><br/>
                        <b id="display" style=" color:#e50404;font-size:18px;height: 50px; width: 100%;"></b>
                        </div>
                        <div id="map" style="width: 100%; height: 400px; margin-top:2%;"></div>

                    </div>
                </div>
            </div>
            <script>
            var geocoder = new google.maps.Geocoder();
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: new google.maps.LatLng(6.550449, 3.574901),
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
                ['Store address', 6.550449, 3.574901, 2],
               
              ];
        
              var ltlng = [];
        
                    ltlng.push(new google.maps.LatLng(latitude_point, longitude_point));
                    ltlng.push(new google.maps.LatLng( 6.550449, 3.574901));
                    var directionsService = new google.maps.DirectionsService();

var request = {
  origin      : document.getElementById("address1").value, // a city, full address, landmark etc
  destination : 'Primal Tek Plaza 1st Floor, Block A, Suite 29, 63 Egbeda, Idimu Rd, Egbeda, Lagos, Nigeria',
  travelMode  : google.maps.DirectionsTravelMode.DRIVING
};

directionsService.route(request, function(response, status) {
  if ( status == google.maps.DirectionsStatus.OK ) {
    var getPrice = ( Math.round(response.routes[0].legs[0].distance.value /1000) ); // the distance in metres


    alert(getPrice);
              if(getPrice <=5 ){
                resultPrice = 700;
              }
              else if(getPrice >=5 && getPrice<=15){
                resultPrice = 1300;
              }
              else if(getPrice >=16 && getPrice<=20){
                resultPrice = 1600;
              }
              else if(getPrice >=21 && getPrice<=25){
                resultPrice = 2000;
              }
              else if(getPrice >=26 && getPrice<=31){
                resultPrice = 2500;
              }
              else if(getPrice >=32 && getPrice<=36){
                resultPrice = 3000;
              }
                else if(getPrice >=37 && getPrice<=40){
                resultPrice = 3500;
              }
              else{
                resultPrice = 4000;
              }
              document.cookie = 'INs_NU='+resultPrice;
              naira = "The estimated price is ₦"
              var final_result = naira.concat(resultPrice);
        
            //   alert(final_result);
        
              var display=document.getElementById("display")
              display.innerHTML=final_result;
        
  }
  else {
    // oops, there's no route between these two locations
    // every time this happens, a kitten dies
    // so please, ensure your address is formatted properly
  }
});
              // getPrice = (getDistanceFromLatLonInKm(6.550449, 3.574901, latitude_point, longitude_point)).toFixed(1);
             
            
            
            
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
            
        
            for (var i = 0; i < ltlng.length; i++) {
                        var marker = new google.maps.Marker
                            (
                            {
                                // position: new google.maps.LatLng(-34.397, 150.644),
                                position: ltlng[i],
                                map: map,
                                title: 'Click me'
                            }
                            );
                    }
                    //***********ROUTING****************//
        
                    //Intialize the Path Array
                    var path = new google.maps.MVCArray();
        
                    //Intialize the Direction Service
                    var service = new google.maps.DirectionsService();
        
                    //Set the Path Stroke Color
                    var poly = new google.maps.Polyline({ map: map, strokeColor: '#4986E7' });
                    //Loop and Draw Path Route between the Points on MAP
                    for (var i = 0; i < ltlng.length; i++)
                    {
                        if ((i + 1) < ltlng.length) {
                            var src = ltlng[i];
                            var des = ltlng[i + 1];
                            path.push(src);
                            poly.setPath(path);
                            service.route({
                                origin: src,
                                destination: des,
                                travelMode: google.maps.DirectionsTravelMode.DRIVING
                            }, function (result, status) {
                                if (status == google.maps.DirectionsStatus.OK) {
                                    for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                                        path.push(result.routes[0].overview_path[i]);
                                    }
                                }
                            });
                        }
                    }
            
                  } else {
                    alert('Something went wrong, Fill in the correct details and retry!');
                  }
                });
            
                
                
            
                
             
              
              }
            
            </script>        
@endsection