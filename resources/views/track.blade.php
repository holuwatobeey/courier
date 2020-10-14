@extends('layouts.mainLayout')
@section('content')
     <!-- Page banner Area -->
     <div class="page-banner bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-content">
                            <h2>Track</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>Track</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page banner Area -->

        <!-- Conatct Info -->
        <div class="pt-100 pb-70">
            <div class="container">
                
                <div class="col-md-12">
                    @if($track[0]->status == 'Out For Delivery')
                    <div class="card">
                        <div class="card card-body">
                            <h5>Your Package with tracking number {{$track[0]->tracking_number}} Is Out For Delivery</h5>
                        </div>
                    </div>
                   
                    @endif
                    @if($track[0]->status == 'Collected')
                    <div class="card">
                        <div class="card card-body">
                            <h5>Your Package with tracking number {{$track[0]->tracking_number}} Has Been Collected</h5>
                        </div>
                    </div>
                   
                    @endif
                    @if($track[0]->status== 'In Transit')
                    <div class="card">
                        <div class="card card-body">
                            <h5>Your Package with tracking number {{$track[0]->tracking_number}} Is In Transit</h5>
                        </div>
                    </div>
                   
                    @endif
                    @if($track[0]->status== 'Delivered')
                    <div class="card">
                        <div class="card card-body">
                            <h5>Your Package with tracking number {{$track[0]->tracking_number}} has been delivered</h5>
                        </div>
                    </div>
                    
                    @endif
                </div>
            </div>
        </div>
@endsection