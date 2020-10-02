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
                        <div class="contact-info">
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
                        <div class="contact-info">
                            <i class='bx bxs-location-plus'></i>
                            <h4>Our Location</h4>
                            <p>Somewhere In Lagos</p>
                            <p>Nigeria</p>
                        </div>
                    </div>
    
                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="contact-info">
                            <i class='bx bxs-envelope'></i>
                            <h4>Email Address</h4>
                            <p><a href="mailto:delivery@pointoutcourier.com.ng">delivery@pointoutcourier.com.ng</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Conatct Info -->

        <!-- Contact Area -->
        <div class="contact-form-area pb-100">
            <div class="container">
                <div class="section-title">
                    <span>Contact Us</span>
                    <h2>Get in Touch</h2>
                </div>

                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="Your email address">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="Your phone number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" class="default-btn-one">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact Area -->
@endsection