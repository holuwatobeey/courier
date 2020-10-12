@extends('layouts.mainLayout')
@section('content')
     <!-- Page banner Area -->
     <div class="page-banner bg-1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-content">
                            <h2>Contact Us</h2>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li>Contact</li>
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
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div  style="height:18em !important;" class="contact-info">
                            <i class='bx bxs-phone'></i>
                            <h4>Contact Number</h4>
                           <p>
                                    <span class="fa fa-whatsapp" style="
                                    color: #c90c0c;
                                    border:1px solid #ccc;
                                    border-radius:7px;
                                    padding:2%;
                                    font-size: 20px;
                                    
                                  "></span>
                                    <a href="tel: +2349075555000"> (+234) 907 555 5000</a>
                           </p><br/>
                                <p>
                                        <span class='bx bxs-phone-call'style="
                                        color: #c90c0c;
                                        border:1px solid #ccc;
                                        border-radius:7px;
                                        padding:2%;
                                        font-size: 19px;
                                        
                                      "></span>
                                    <a href="tel: +2348159015555"> (+234) 815 901 5555</a>
                                </p>  
                                {{-- <p><a href="tel: +2349040002211"> (+234) 904 000 2211</a></p> --}}
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6">
                        <div  style="height:18em !important;"  class="contact-info">
                            <i class='bx bxs-location-plus'></i>
                            <h4>Our Location</h4>
                           <p> Primal Tek Plaza 
                            1st Floor, Block A, Suite 29, </p>
                            <p>63 Egbeda Idimu Road,</p>
                            <p>Egbeda - Lagos.</p>

                          
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div  style="height:18em !important;"  class="contact-info">
                            <i class='bx bxs-envelope'></i>
                            <h4>Email Address</h4>
                            <p><a href="mailto:delivery@pointoutcourier.com.ng">delivery@pointoutcourier.com.ng</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Conatct Info -->
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        </div>
        <!-- Contact Area -->
        <div style="background: #301d44;" class="contact-form-area pt-100 pb-100">
            <div class="container">
                
               
                <div class="section-title">
                    <h2 style="color:white">Get in Touch</h2>
                    <span>Contact Us</span>
                   
                </div>

                <div class="contact-form">
                    <form action="/contact-us" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}"  required placeholder="Your name">
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" required  placeholder="Your email address">
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control {{ $errors->has('msg_subject') ? ' has-error' : '' }}" required placeholder="Your Subject">
                                    @if ($errors->has('msg_subject'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('msg_subject') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control {{ $errors->has('phone') ? ' has-error' : '' }}"  required placeholder="Your phone number">
                                    @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message"  class="form-control {{ $errors->has('message') ? ' has-error' : '' }}" cols="30" rows="6" required placeholder="Write your message..."></textarea>
                                    @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong style="color:red;">{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn-one">Send Message</button>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact Area -->
@endsection