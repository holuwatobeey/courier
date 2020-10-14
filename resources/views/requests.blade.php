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
            <div class="card-header text-center"><h5>Delivery Requests</h5></div>
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
                        <form action="{{route('acceptreq')}}" method="POST">
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
                                    <button type="submit" style="color:white" class="btn btn-success"><i class="align-middle" data-feather="check"></i>Accept</button>
                                    {{-- <a href="#"><i class="align-middle" data-feather="trash"></i></a> --}}
                                </td> 
                            </tr>
                        </form>
                           @endforeach
                        </tbody>
                    </table>
                    {{ $schedules->links() }}
            </div>
        </div>
    </div>
    </div>
</main>

@endsection