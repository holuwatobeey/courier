@extends('layouts.mainLayout')
@section('content')

        <!-- Page banner Area -->
        <div class="page-banner bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="page-content">
                                <h2>Request A Delivery</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>Request A Delivery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br/>
            <!-- End Page banner Area -->
<!-- Choose Area -->



<!-- Speciality Slider Area -->
<div style="padding-bottom:10px; background:#301d44;" class="speciality-area ">
    <div class="container">
        <div class="section-title"><br/>
            <h2 style="color:white;">SCHEDULE A DELIVERY</h2>
            <span>More Opportunities, Less Hassle</span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div style="height:30em !important;" class="service-card">
                    <i class='bx bxs-truck'></i>
                    <h3>PICK-UP</h3>
                    <p>Simply book when it best suits you and our couriers will pick up on demand. All you have to do is outline the package you need to be delivered and we’ll suggest the fastest, cheapest, and most environmentally friendly option.</p>
                    <a href="#" class="default-btn-two">Schedule</a>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div style="height:30em !important;" class="service-card">
                    <i class='fa fa-car'></i>
                    <h3>DROP OFF OPTION</h3>
                    <p>Alternatively, you can benefit from a reduced price by dropping your parcel for delivery at our pick-up center; located at 63 Egbeda Idimu Road Egbeda, Lagos, Nigeria.</p>
                    <a href="#" class="default-btn-two">Schedule</a>
                </div>
            </div>
           
        </div>

    </div>
</div>
<br/>
<div class="d-flex justify-content-center">
<div style="margin-bottom:2%;" class="col-md-10">
    @if (session('failure'))
            <div class="alert alert-danger">
                {{ session('failure') }}
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a style="color:#f21860;" class="nav-link active" data-toggle="tab" href="#home">DROP-OFF</a>
                </li>
                <li class="nav-item">
                  <a style="color:#f21860;" class="nav-link" data-toggle="tab" href="#menu1">COLLECTION</a>
                </li>
                
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active container" id="home">
                    <br/>
                   <form  method="post" action="/schedule">
                        @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Name</label>
                        <input type="text" class="form-control" placeholder="Name" value="{{ old('name1') }}" name="name1" id="name1" required><br/>
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" value="{{ old('email1') }}" name="email1" id="email1" required><br/>
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Phone Number</label>
                        <input type="text" class="form-control" id="phone1" placeholder="Phone Number" value="{{ old('phone1') }}" name="phone1" required><br/>
                        </div><br/> 
                        <div class="col-md-6">
                                <label for="">Package Description</label>
                        <textarea class="form-control" id="desc1" placeholder="Package Description" value="{{ old('desc1') }}" name="desc1" required></textarea>
                        </div><br/>
                    </div><br/>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Package Value</label>
                        <input type="text" class="form-control" id="pkg_value1" placeholder="Package Monetary Value In Naira" value="{{ old('pkg_value1') }}" name="pkg_value1" required><br/>
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Package Size</label>
                        <select class="form-control" value="{{ old('pkg_size1') }}" name="pkg_size1" id="pkg_size1" required>
                            <option selected>Select package size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select><br/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Pick Up Date</label>
                        <input type="date" class="form-control" id="date1" value="{{ old('date1') }}" name="date1" required><br/>
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Pick Up Time</label>
                        <input type="text" class="form-control" placeholder="Pick up time (E.g 9:00am - 10:00am)" value="{{ old('time1') }}" name="time1" id="time1" required><br/>
                        </div> <br/>    
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Drop-Off Location</label>
                                <input type="text" class="form-control" id="d_loc1" placeholder="Drop-Off Location" value="" name="d_loc1" required><br/>

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
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Drop-Off Address</label>
                        <input type="text" class="form-control" id="address1" placeholder="Drop-Off Address" value="{{ old('address1') }}" name="address1" required><br/>
                        </div>
                        <div class="col-md-12">
                                <label for="">Delivery Option</label>
                        <select class="form-control" value="{{ old('dev_opt1') }}" name="dev_opt1" id="dev_opt1" required>
                            <option selected>Delivery Option</option>
                            <option value="same">Same Day Delivery</option>
                            <option value="next">Next Day Delivery</option>
                            <option value="premium">Premium Delivery</option>
                        </select><br/>
                        </div>
                    </div><br/>
                    <input type="hidden" style="" class="form-control" name="amount" value=""> {{-- required in kobo --}}
                    
                        
                    <input type="hidden" name="currency" value="NGN">
                    <input type="hidden" name="metadata[]" id="metadata" value=""> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}   
                    <input type="button"  style="padding:1% !important; border-radius:20px;" class="btn btn-info" value="Get cost estimate"  onclick="codeAddress()"> <br/><br/>
				<b id="display" style=" color:#e50404;font-size:18px;height: 50px; width: 100%;"></b>
                    
				
                    
                    </form>
                </div>
                <div class="tab-pane container" id="menu1">
                    <br/>
                    <form  method="post" action="/schedule">
                        @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Name</label>
                        <input type="text" class="form-control" id="name2" placeholder="Name" name="name2" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email2" id="email2" required><br/>
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Phone Number</label>
                        <input type="text" class="form-control" id="phone2" placeholder="Phone Number" name="phone2" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Package Description</label>
                        <textarea class="form-control" id="desc2" placeholder="Package Description" name="desc2" required></textarea><br/>
                        </div><br/>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Package Value</label>
                        <input type="text" class="form-control" id="pkg_value2" placeholder="Package Monetary Value In Naira" name="pkg_value2" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Package Size</label>
                        <select class="form-control" name="pkg_size2" id="pkg_size2" required>
                            <option selected>Select package size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select><br/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Pick Up Date</label>
                        <input type="date" class="form-control" name="date2" id="date2" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Pick Up Time</label>
                        <input type="text" class="form-control" placeholder="Pick up time (E.g 9:00am - 10:00am)" name="time2" id="time2" required><br/>
                        </div> 
                    </div>
                    <div class="form-row">
                            <div class="col-md-6">
                                    <label for="">Pick-Up Location</label>                        
                                    <input type="text" class="form-control" name="p_loc2" id="p_loc2" required><br/>

                            {{-- <select class="form-control" name="p_loc2" id="p_loc2" required>
                                <option selected>Select Pick-Up Location</option>
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
                            </div>
                            <div class="col-md-6">
                                    <label for="">Pick-Up Address</label>
                            <input type="text" class="form-control" id="p_address2" placeholder="Pick-Up Address" name="p_address2" required><br/>
                            </div>
                            
                        </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Drop-Off Location</label>
                                <input type="text" class="form-control" id="d_loc2" value="" placeholder="Drop-Off Location" name="d_loc2" required><br/>

                        {{-- <select class="form-control" name="d_loc2" id="d_loc2" required>
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
                        </div>
                        <div class="col-md-6">
                                <label for="">Drop-Off Address</label>
                        <input type="text" class="form-control" id="address2" placeholder="Drop-Off Address" name="address2" required><br/>
                        </div>
                        <div class="col-md-12">
                           
                                <label for="">Delivery Option</label>
                        <select class="form-control" name="dev_opt2" id="dev_opt2" required>
                            <option selected>Delivery Option</option>
                            <option value="same">Same Day Delivery</option>
                            <option value="next">Next Day Delivery</option>
                            <option value="premium">Premium Delivery</option>
                        </select><br/>
                        </div>
                    </div><br/>
                                    <input type="hidden" style="" class="form-control" name="amount"> {{-- required in kobo --}}
                                    
                                        
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="metadata[]" id="metadata2" value=""> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}   
                    <input type="button" style="padding:1% !important; border-radius:20px;" class="btn btn-info" value="Get cost estimate" onclick="codeAddresstwo()"> <br/><br/>
				<b id="display2" style=" color:#e50404;font-size:18px;height: 50px; width: 100%;"></b>
                    {{-- <button type="submit" class="default-btn-one">Schedule</button> --}}
                    </form>
                </div>
              </div>
              <div id="map" style="width: 100%; height: 400px; margin-top:2%;"></div>

</div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
       

   
	var geocoder = new google.maps.Geocoder();
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 10,
		center: new google.maps.LatLng(6.550449, 3.574901),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	  });
	
	
	  function codeAddress() {
		var address = document.getElementById('d_loc1').value +document.getElementById('address1').value;
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


    // alert(getPrice);
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
      display.innerHTML=final_result + '<br/><br/><button type="submit" id="proceed" name="peno" class="default-btn-one">Proceed to payment</button>';
	//   document.getElementById("proceed").style.visibility = "visible";

         var metadata = document.getElementById('metadata'); 
         var desc = document.getElementById('desc1').value; 
         var name = document.getElementById('name1').value; 
         var email = document.getElementById('email1').value; 
         var phone = document.getElementById('phone1').value; 
         var package_value = document.getElementById('pkg_value1').value; 
         var package_size = document.getElementById('pkg_size1').value; 
         var pickup_date = document.getElementById('date1').value; 
         var pickup_time = document.getElementById('time1').value; 
         var dropoff_loc = document.getElementById('d_loc1').value; 
         var dropoff_addr = document.getElementById('address1').value; 
         var delivery_option = document.getElementById('dev_opt1').value; 
         var fid = {'desc':desc, 'name':name, 'phone':phone, email:email, 'package_value': package_value, 'btn': 'peno', 'package_size':package_size, 'pickup_date':pickup_date,'pickup_time':pickup_time,'dropoff_loc':dropoff_loc,'dropoff_addr':dropoff_addr, 'delivery_option':delivery_option}; 
         metadata.value = JSON.stringify(fid); 
    
        
  }
  else {
    // oops, there's no route between these two locations
    // every time this happens, a kitten dies
    // so please, ensure your address is formatted properly
  }
});
	  // getPrice = (getDistanceFromLatLonInKm(6.550449, 3.574901, latitude_point, longitude_point)).toFixed(1);
    //   if(getPrice <=5 ){
    //     resultPrice = 700;
    //   }
    //   else if(getPrice >=5 && getPrice<=15){
    //     resultPrice = 1300;
    //   }
    //   else if(getPrice >=16 && getPrice<=20){
    //     resultPrice = 1600;
    //   }
    //   else if(getPrice >=21 && getPrice<=25){
    //     resultPrice = 2000;
    //   }
    //   else if(getPrice >=26 && getPrice<=31){
    //     resultPrice = 2500;
    //   }
    //   else if(getPrice >=32 && getPrice<=36){
    //     resultPrice = 3000;
    //   }
    //   else if(getPrice >=37 && getPrice<=40){
    //     resultPrice = 3500;
    //   }
    //   else{
    //     resultPrice = 4000;
    //   }
    //   document.cookie = 'INs_NU='+resultPrice;
	  // naira = "The estimated price is ₦"
	  // var final_result = naira.concat(resultPrice);

	//   alert(final_result);

	  
	
	
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
    
      








      function codeAddresstwo() {
		var address = document.getElementById('d_loc2').value +document.getElementById('address2').value;
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
  origin      : document.getElementById("address2").value, // a city, full address, landmark etc
  destination : 'Primal Tek Plaza 1st Floor, Block A, Suite 29, 63 Egbeda, Idimu Rd, Egbeda, Lagos, Nigeria',
  travelMode  : google.maps.DirectionsTravelMode.DRIVING
};

directionsService.route(request, function(response, status) {
  if ( status == google.maps.DirectionsStatus.OK ) {
    var getPrice = ( Math.round(response.routes[0].legs[0].distance.value /1000) ); // the distance in metres


    // alert(getPrice);
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
        
            var display=document.getElementById("display2")
      display.innerHTML=final_result + '<br/><br/><button type="submit" name="powt" id="proceed" class="default-btn-one">Proceed to payment</button>';
	//   document.getElementById("proceed").style.visibility = "visible";
      var firstmeta = document.getElementById('metadata');
    var metadata = document.getElementById('metadata2'); 
         var desc = document.getElementById('desc2').value; 
         var name = document.getElementById('name2').value; 
         var email = document.getElementById('email2').value; 
         var phone = document.getElementById('phone2').value; 
         var package_value = document.getElementById('pkg_value2').value; 
         var package_size = document.getElementById('pkg_size2').value; 
         var pickup_date = document.getElementById('date2').value; 
         var pickup_time = document.getElementById('time2').value; 
         var pickup_location = document.getElementById('p_loc2').value; 
         var pickup_address = document.getElementById('p_address2').value; 
         var dropoff_loc = document.getElementById('d_loc2').value; 
         var dropoff_addr = document.getElementById('address2').value; 
         var delivery_option = document.getElementById('dev_opt2').value; 
         var fid = {'desc':desc, 'name':name, 'phone':phone, 'email':email, 'package_value': package_value, 'btn': 'powt', 'package_size':package_size, 'pickup_date':pickup_date,'pickup_time':pickup_time,'pickup_loc':pickup_location,'pickup_addr':pickup_address,'dropoff_loc':dropoff_loc,'dropoff_addr':dropoff_addr, 'delivery_option':delivery_option}; 
         metadata.value = JSON.stringify(fid); 
         firstmeta.removeAttribute("name");
        
  }
  else {
    // oops, there's no route between these two locations
    // every time this happens, a kitten dies
    // so please, ensure your address is formatted properly
  }
});
	  // getPrice = (getDistanceFromLatLonInKm(6.550449, 3.574901, latitude_point, longitude_point)).toFixed(1);
      
    //   if(getPrice <=5 ){
    //     resultPrice = 700;
    //   }
    //   else if(getPrice >=5 && getPrice<=15){
    //     resultPrice = 1400;
    //   }
    //   else if(getPrice >=16 && getPrice<=20){
    //     resultPrice = 1700;
    //   }
    //   else if(getPrice >=21 && getPrice<=25){
    //     resultPrice = 2100;
    //   }
    //   else if(getPrice >=26 && getPrice<=31){
    //     resultPrice = 2600;
    //   }
    //   else if(getPrice >=32 && getPrice<=36){
    //     resultPrice = 3100;
    //   }
    //   else if(getPrice >=37 && getPrice<=40){
    //     resultPrice = 3600;
    //   }
    //   else{
    //     resultPrice = 4100;
    //   }
    //   document.cookie = 'INs_NU='+resultPrice;
	  // naira = "The estimated price is ₦"
	  // var final_result = naira.concat(resultPrice);

	//   alert(final_result);

	  

	
	
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