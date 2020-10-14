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
                            @foreach ($admin_schedules as $schedule)
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
                    {{ $admin_schedules->links() }}
            </div>
        </div>
    </div>
    </div>
</main>
@endsection