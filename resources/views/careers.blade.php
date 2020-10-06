@extends('layouts.mainLayout')
@section('content')
<div class="page-banner bg-2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-content">
                    <h2>Careers</h2>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>Careers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><br/>
    <div style="margin-bottom:5%;" class="container d-flex justify-content-center">
        <div class="col-md-8">
        <h3 class="text-center">Join Us</h3>
        <p>We’re always on the look out for competent and enthusiastic new talent to join our team. Simply fill the form and we’ll get back to you as soon as possible.
        </p>
        <br/>
        <form method="get" action="#">
            <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="last">Last Name:</label>
              <input type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="number" class="form-control" >
              </div>
              <div class="form-group">
                <label for="last">Position:</label>
                <input type="text" class="form-control" >
                {{-- <select class="form-control" id="" required>
                    <option selected>Select Position</option>
                    <option value="small">...</option>
                    
                </select> --}}

              </div>
              <div class="form-group">
                <label for="date">Available Date:</label>
                <input type="date" class="form-control" >
              </div>
              <div class="form-group">
                <label for="resume">Link To Your Resume:</label>
                <input type="text" class="form-control" >
              </div>
            <button type="submit" class="default-btn-one btn-default">Submit</button>
          </form>
        </div>
    </div>
@endsection