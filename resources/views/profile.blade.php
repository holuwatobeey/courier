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

        <h1 class="h3 mb-3 text-center">Profile</h1>

        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="text-center card-title mb-0">Profile Details</h5>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <b>Full Name:</b><br/> {{Auth::user()->first_name}} {{Auth::user()->last_name}} <br/>
                        <b>Email:</b><br/> {{Auth::user()->email}} <br/>
                        <b>Username:</b><br/> {{Auth::user()->username}} <br/>
                        <b>Mobile Number:</b><br/> {{Auth::user()->mobile}} <br/>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-xl-9">
                <div class="card">
                    <div class="card-header">

                        <h5 class="card-title text-center mb-0">Edit Profile</h5>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body h-100">

                        <div class="">
                            <form action="{{route('edit')}}" method="post">
                                @csrf
                            <div class="form-group">
                                <label for="name">First Name</label>
                                <input type="text" class="form-control" name="f_name" value="{{Auth::user()->first_name}}">
                            </div><br/>
                            <div class="form-group">
                                <label for="name">Last Name</label>
                                <input type="text" class="form-control" name="l_name" value="{{Auth::user()->last_name}}">
                            </div><br/>
                            <div class="form-group">
                                <label for="mobile">Username</label>
                                <input type="text" class="form-control" name="username" value="{{Auth::user()->username}}">
                            </div><br/>
                            <div class="form-group">
                                <label for="mobile">Email</label>
                                <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}">
                            </div><br/>
                            <div class="form-group">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" value="{{Auth::user()->mobile}}">
                            </div><br/>
                           
                            <button type="submit" class="btn btn-success">Update</button>
                            </form>
                             
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h5 class="card-title text-center mb-0">Change Password</h5>
                </div>
                <hr class="my-0" />
                <div class="card-body h-100">

                    <form class="form-horizontal offset-md-4" method="POST" action="{{ route('changePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">Current Password</label>

                            <div class="col-md-6">
                                <input id="current-password" type="password" class="form-control" name="current-password" required>

                                @if ($errors->has('current-password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br/>

                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label for="new-password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="new-password" type="password" class="form-control" name="new-password" required>
                                <br/>
                                @if ($errors->has('new-password'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('new-password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br/>

                        <div class="form-group">
                            <label for="new-password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                            </div>
                        </div><br/>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success">
                                    Change Password
                                </button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
        

    </div>
</main> 
@endsection