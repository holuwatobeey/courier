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
            <div class="card-header text-center"><h5>All Delivery Masters</h5></div>
            <div class="card-body">
                <h3></h3>
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-success mr-auto">Add New Delivery Master</a><br/>
            <div class="table-responsive">
                   <br/>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                               
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dms as $user)
                            <form action="/see-users" method="POST">
                                @csrf
                            <input type="hidden" name="id" value="{{$user->id}}">
                            <tr>
                                <td>{{$user->first_name}} {{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->mobile}}</td>
                                <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModal{{$user->id}}" class="btn btn-danger mr-auto">Delete Delivery Master</a>
                                </td>
                               <!-- Modal -->
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Delete Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            Are you sure you want to delete this user?
        </div>
        <div class="modal-footer">
            
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="submit" name="delete" class="btn btn-primary">Yes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
                                
                                {{-- <td class="table-action">
                                    <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                    <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                                </td> --}}
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
            </div>
        </div>
    </div>








    <div class="card">
        <div class="card-header text-center"><h5>All Users</h5></div>
        <div class="card-body">
            <h3></h3>
        <div class="table-responsive">
               <br/>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Phone Number</th>
                            {{-- <th>Role</th> --}}
                           
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->first_name}} {{$user->last_name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->mobile}}</td>
                            {{-- <td>
                                @if($user->role == 1)
                                Admin
                                @endif
                                @if($user->role == 2)
                                Delivery Master
                                @endif
                                @if($user->role == 0)
                                User
                                @endif
                            </td> --}}
                           
                            
                            {{-- <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td> --}}
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
        </div>
    </div>
</div>
    </div>
</main>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add A New Delivery Master</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form name="myform" method="POST" action="{{ route('add_user') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="First name" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div><br/>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last name" name="last_name" value="{{ old('last_name') }}" required autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div><br/>

                <div class="form-group">
                    <input id="name" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" value="{{ old('username') }}" required autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                </div><br/>
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div><br/>
                <div class="form-group">
                    <input id="phone" type="number" class="form-control @error('mobile') is-invalid @enderror" placeholder="Phone number" name="mobile" value="{{ old('mobile') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div><br/>
                <input type="button" class="btn btn-success" value="Generate Password" onClick="randomPassword(8);"><br/><br/>
                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="add" class="btn btn-primary">Add</button>
        </div>
    </form>
      </div>
    </div>
  </div>
  <script>
    function randomPassword(length) {
    var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
    var pass = "";
    for (var x = 0; x < length; x++) {
        var i = Math.floor(Math.random() * chars.length);
        pass += chars.charAt(i);
    }
    myform.password.value = pass;
}
  </script>

@endsection