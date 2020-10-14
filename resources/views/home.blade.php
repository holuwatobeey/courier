@extends('layouts.dashboardLayout')

@section('content')
<style>
     .card {
      overflow: hidden;
    }
    
    .card-block .rotate {
      z-index: 8;
      float: right;
      height: 100%;
    }
    
    .card-block .rotate i {
      color: rgba(20, 20, 20, 0.15);
      position: absolute;
      left: 0;
      left: auto;
      right: -10px;
      bottom: 0;
      display: block;
      -webkit-transform: rotate(-44deg);
      -moz-transform: rotate(-44deg);
      -o-transform: rotate(-44deg);
      -ms-transform: rotate(-44deg);
      transform: rotate(-44deg);
    }
  </style>  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            

               
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->role == 2)
                    <div class="card">
                    <div class="card-header text-center"><h5>Completed Delivery History</h5></div>
                    <div class="card-body">
                        @if(count($delivery_schedules) >= 1)
                    <div class="table-responsive">
                           
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Drop-Off Location</th>
                                        <th>Drop-Off Address</th>
                                        <th>Delivery Type</th>
                                        <th>Delivery Status</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($delivery_schedules as $schedule)
                                    <tr>
                                        <td>{{$schedule->tracking_number}}</td>
                                        <td>{{$schedule->name}}</td>
                                        <td>{{$schedule->email}}</td>
                                        <td>{{$schedule->phone}}</td>
                                        <td>{{$schedule->amount}}</td>
                                        <td>{{$schedule->desc}}</td>
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
                                        <td>{{$schedule->status}}</td>
                                        
                                        {{-- <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td> --}}
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                            {{ $delivery_schedules->links() }}
                    </div>
                    @else
                    <h3 class="text-center">You do not have any completed delivery yet.</h3>
                    @endif
                </div>
            </div>
                    @endif
                    @if(Auth::user()->role == 0)
                    <div class="card">
                    <div class="card-header text-center"><h5>Delivery History</h5></div>
                    <div class="card-body">
                    <div class="table-responsive">
                           
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Tracking Number</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Drop-Off Location</th>
                                        <th>Drop-Off Address</th>
                                        <th>Delivery Type</th>
                                        <th>Delivery Status</th>
                                        {{-- <th>Actions</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedules as $schedule)
                                    <tr>
                                        <td>{{$schedule->tracking_number}}</td>
                                        <td>{{$schedule->name}}</td>
                                        <td>{{$schedule->email}}</td>
                                        <td>{{$schedule->phone}}</td>
                                        <td>{{$schedule->amount}}</td>
                                        <td>{{$schedule->desc}}</td>
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
                                        <td></td>
                                        
                                        {{-- <td class="table-action">
                                            <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                            <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                        </td> --}}
                                    </tr>
                                   @endforeach
                                </tbody>
                            </table>
                            {{ $schedules->links() }}
                    </div>
                </div>
            </div>
                    @endif


                    @if(Auth::user()->role == 1)
                         <div class="row col-md-12">
                             <div style="background:white;" class="row d-flex p-4 justify-content-center">
                                    <div class="col-md-6">
                                        <div class="card card-inverse card-success">
                                            <div class="card-block p-2 bg-success">
                                            <div class="rotate">
                                                <i class="fa fa-user fa-5x"></i>
                                            </div>
                                            <h6 style="color:white;" class="text-uppercase">Users</h6>
                                        <h1 style="color:white;" class="display-1">{{count($users)}}</h1>
                                            </div>
                                        </div>
                                        <a href="/see-users">See All Users</a>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="card card-inverse card-danger">
                                            <div class="card-block p-2 bg-danger">
                                            <div class="rotate">
                                                <i class="fa fa-list fa-4x"></i>
                                            </div>
                                            <h6 style="color:white;" class="text-uppercase">Deliveries</h6>
                                        <h1 style="color:white;" class="display-1">{{count($admin_schedules)}}</h1>
                                            </div>
                                        </div>
                                        <a href="/see-deliveries">See All Deliveries</a>
                                        </div>
         
                             </div>
                             </div>
                            
                   
                    @endif
                   
               
        </div>
    </div>
</div>
@endsection
