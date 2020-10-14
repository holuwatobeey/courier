@extends('layouts.dashboardlayout')

@section('content')
@if (session('status'))
    <div style="padding:1%" class="alert alert-success">
        {{ session('status') }}
    </div><br/>
@endif
@if (session('error'))
    <div style="padding:1%" class="alert alert-danger">
        {{ session('error') }}
    </div><br/>
@endif
@if ($errors->any())
<div style="padding:1%" class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif
<main class="content">
    <div class="container-fluid p-0">
        <div class="card">
            <div class="card-header text-center"><h5>Manage Deliveries</h5></div>
            <div class="card-body">
            <div class="table-responsive">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tracking Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Description</th>
                                <th>Pick-Up Date</th>
                                <th>Pick-Up Time</th>
                                <th>Pick-Up Location</th>
                                <th>Pick-Up Address</th>
                                <th>Drop-Off Location</th>
                                <th>Drop-Off Address</th>
                                <th>Delivery Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $schedule)
                            @if($schedule->status != "Delivered")
                        <form action="{{route('manageupdate')}}" method="POST">
                            @csrf
                            <tr>
                                <input type="hidden" name="id" value="{{$schedule->id}}">
                                <td>{{$schedule->tracking_number}}</td>
                                <td>{{$schedule->name}}</td>
                                <td>{{$schedule->email}}</td>
                                <td>{{$schedule->phone}}</td>
                                <td>{{$schedule->desc}}</td>
                                <td>{{$schedule->pickup_date}}</td>
                                <td>{{$schedule->pickup_time}}</td>
                                <td>{{$schedule->pickup_loc}}</td>
                                <td>{{$schedule->pickup_addr}}</td>
                                <td>{{$schedule->dropoff_loc}}</td>
                                <td>{{$schedule->dropoff_addr}}</td>
                                <td>
                                    @if($schedule->delivery_opt == 'same')
                                    Same Day Delivery
                                    @endif
                                    @if($schedule->delivery_opt == 'premium')
                                    Premium Delivery
                                    @endif
                                    @if($schedule->delivery_opt == 'next')
                                    Next Day Delivery
                                    @endif
                                </td>
                                
                                <td class="table-action">
                                <button type="button" style="color:white" data-toggle="modal" data-target="#exampleModalCenter{{$schedule->id}}" class="btn btn-success"><i class="align-middle" data-feather="edit-2"></i>Edit  Status</button>
                                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                                </td> 

                            </tr>
                        <div class="modal fade" id="exampleModalCenter{{$schedule->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalCenterTitle">Update Delivery Status</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                        <select id="test" class="form-control" name="form_select" onchange="showDiv('hidden_div', this)">
                                            <option selected>Choose delivery status</option>
                                            <option value="Collected">Collected</option>
                                            <option value="In Transit">In Transit</option>
                                            <option value="Out For Delivery">Out For Delivery</option>
                                            <option value="Delivered">Delivered</option>
                                         </select>
                                         <div id="hidden_div">
                                            
                                         </div
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Save Update</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </form>
                        @endif
                           @endforeach
                        </tbody>
                    </table>
                    {{ $schedules->links() }}
            </div>
        </div>
    </div>
    </div>
</main>
{{-- <p><button onclick="getLocation()">Get My Location</button></p>
<p id="demo"></p> --}}
<script>
//     function showDiv(divId, element)
// {
//     document.getElementById(divId).style.display = element.value == 'out' ? 'block' : 'none';
// }
var x=document.getElementById("demo");
function getLocation(){
    if (navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
    else{
        x.innerHTML="Geolocation is not supported by this browser.";
    }
}

function showPosition(position){
    lat=position.coords.latitude;
    lon=position.coords.longitude;
    displayLocation(lat,lon);
}

function showError(error){
    switch(error.code){
        case error.PERMISSION_DENIED:
            x.innerHTML="User denied the request for Geolocation."
        break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML="Location information is unavailable."
        break;
        case error.TIMEOUT:
            x.innerHTML="The request to get user location timed out."
        break;
        case error.UNKNOWN_ERROR:
            x.innerHTML="An unknown error occurred."
        break;
    }
}

function displayLocation(latitude,longitude){
    var geocoder;
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(latitude, longitude);

    geocoder.geocode(
        {'latLng': latlng}, 
        function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (results[0]) {
                    var add= results[0].formatted_address ;
                    var  value=add.split(",");

                    count=value.length;
                    country=value[count-1];
                    state=value[count-2];
                    city=value[count-3];
                    x.innerHTML = "city name is: " + add;
                }
                else  {
                    x.innerHTML = "address not found";
                }
            }
            else {
                x.innerHTML = "Geocoder failed due to: " + status;
            }
        }
    );
}
</script>
@endsection