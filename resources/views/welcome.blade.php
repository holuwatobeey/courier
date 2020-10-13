@extends('layouts.mainLayout')

@section('content')

     <!-- Hero Slider -->
     <div class="hero-slider owl-carousel owl-theme">
        <div class="hero-slider-item item-bg3">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <!-- <span>Since 1992</span> -->
                            <h1>DELIVERING ON TIME<br> EVERYTIME</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                            <a href="#" class="default-btn-one mr-3">GET IN TOUCH</a>
                            <a href="#" class="default-btn-two">REQUEST A COURIER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="hero-slider-item item-bg1">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <!-- <span>Since 1992</span> -->
                            <h1>ENVIRONMENTALLY FRIENDLY DELIVERY SERVICES</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                            <a href="#" class="default-btn-one mr-3">Contact Us</a>
                            <a href="#" class="default-btn-two">REQUEST A COURIER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider-item item-bg2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="banner-content">
                            <!-- <span>Since 1992</span> -->
                            <h1>EASY, SIMPLE AND EFFICIENT</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                            <a href="#" class="default-btn-one mr-3">Contact Us</a>
                            <a href="#" class="default-btn-two">REQUEST A COURIER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        
    </div>
    <!-- End Hero Slider -->

    <!-- Contact Area -->
    <div class="container">
        <div class="contact-area mb-85">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-12">
                            <h2 align="center" style="color:white">TRACK A DELIVERY</h2><br/>
                            
                            <form>
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Track Your Parcel" aria-label="Track Your Parcel" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button style="background:#c90c0c; border:1px solid #c90c0c; color:white;" type="submit" class="input-group-text" id="basic-addon2">Track</button>
                            </div>
                            </div>
                            </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

    <!-- About Area --> 
    
    <div class="about-area pb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 wow fadeInLeft slower">
                    <div style="" class="about-contant">
                        <div class="section-title">
                            <!-- <span>About Us</span> -->
                            <h2>AT POINTOUT COURIER</h2>
                        </div>

                        <div class="about-text">
                            <p>The difference about POINTOUT COURIER is quite simply we care. We take great pride in what we do - delivering on time, every time for businesses and individuals effortlessly using innovation at affordable price with a thoughtful and committed approach to service.</p>

                            <!-- <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati.</p> -->
                            
                            <a href="about.html" class="default-btn-one btn-bs">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 wow bounceInDown delay-1s slower">
                    <div class="about-image">
                        <img src="{{asset('img/hero-slider/cou3.jpg')}}" alt="about-image">
                    </div>
                </div>

                {{-- <div class="col-lg-3">
                    
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End About Area -->  

    <!-- Services Area -->
    <!-- <div class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>What We Do</span>
                <h2>Safe and Fast Logistic Services</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <i class='bx bxs-truck'></i>
                        <h3>CORPORATE COURIER SERVICES</h3>
                        <p>Whether you’re a small business or a large business, we specialise in pickup and delivery of parcels, documents, items and palette of goods with full end-to-end tracking in real time, giving you total transparency.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <i class='bx bxs-truck'></i>
                        <h3>RETAIL LOGISTICS SERVICES</h3>
                        <p>With customer's growing appetite for faster deliveries, Pointout Courier is the one platform that will help you power all your last-mile needs and delight your clients. Unleash the full potential of flexible, convenient and precise deliveries by partnering with us.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <i class='bx bxs-truck'></i>
                        <h3>E- COMMERCE LOGISTICS  SERVICES</h3>
                        <p>Our couriers ensure a reduction in delivery failures and provide a more flexible and efficient service for some of the biggest names in e-commerce.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="service-card">
                        <i class='bx bxs-truck'></i>
                        <h3>DOMESTIC COURIER SERVICES</h3>
                        <p>For package deliveries within the city, Pointout is here to serve you. we provide a cost-effective, guaranteed same day or next day Domestic delivery service. Simple to book, uniquely priced, safe and speedily delivered to your doorstep.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
            </div>

            <div class="view-btn">
                <a href="#" class="default-btn">View All</a>
            </div>
        </div>
        
        <div class="services-shape">

        </div>
    </div> -->
    <!-- End Services Area -->

    <!-- Choose Area -->
    <div style="animation-duration: 2s; background: #301d44; " class="wow zoomIn choose-area">

        <div class="shape-one">
            <img src="{{asset('img/shape/shape5.png')}}" alt="Shape">
        </div>
        <div class="container">
             <div class="col-lg-12 col-md-12">
                    <div class="choose-text">
                        <div class="section-ttle">
                            <h2 style="color:white; padding-top:2%" class="text-center">WHY POINTOUT COURIER</h2>
                            <span style="  font-size: 13px;
                            font-weight: 600;
                            display: block;
                            margin-bottom: 15px;
                            color: #f21860;
                            line-height: 1;" class="text-center">We Deliver On Time, Every Time.</span>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> -->

                        <!-- <a href="#" class="default-btn-one">Contact Us</a> -->
                        <div class="shape-image">
                            <img src="{{asset('img/shape/shape2.png')}}" alt="icon">
                        </div>
                    </div>
                </div><br/>
         
            <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div style="height:25em !important;" class="service-card">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <h3>RESULT DRIVEN</h3>
                                <p>Our team of professional personnel are not just effective but also result-driven with a tireless commitment to providing a seamless process from booking to delivery.</p>
                                <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-sm-6">
                        <div style="height:25em !important;" class="service-card">
                                <i class="fa fa-users" aria-hidden="true"></i>

                                <h3>BUSINESS OR PERSONAL</h3>
                                <p>Whether you need a one off delivery or a long term delivery partner for your business,charity or individual needs we've got you covered !</p>
                                <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div style="height:25em !important;" class="service-card">
                                <i class="fa fa-star-o" aria-hidden="true"></i>

                                <h3>RATED COURIERS</h3>
                                <p>Individually reviewed by our team and rated by customers, you can expect a reliable, punctual and polite service.</p>
                                <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                        </div>
                    </div> 
                    <div class="col-lg-3 col-sm-6">
                        <div style="height:25em !important;" class="service-card">
                                <i class="fa fa-money" aria-hidden="true"></i>

                                <h3>EXCLUSIVE PRICING </h3>
                                <p>By partnering with us you'll receive exclusive business rates, plus quick booking access via our online booking platform.</p>
                                     <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- End Choose Area -->

    <!-- Speciality Slider Area -->
    <div style="padding-bottom:10px; animation-duration: 2s;" class="wow fadeInUp speciality-area">
        <div class="container">
            <div class="section-title"><br/>
                <h2>HOW IT WORKS</h2>
                <span>Easily and Quicker</span>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div style="height:27em !important;" class="service-card">
                        <i class='bx bxs-truck'></i>
                        <h3>PICK UP</h3>
                        <p>Simply book when it best suits you and our couriers will pick up on demand. All you have to do is outline the package you need to be delivered and we’ll suggest the fastest, cheapest, and most environmentally friendly option.</p>
                        <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div style="height:27em !important;" class="service-card">
                        <i class='fa fa-car'></i>
                        <h3>DROP OFF</h3>
                        <p>Alternatively, you can benefit from a reduced price by dropping your parcel for delivery at our pick-up center; located at 63 Egbeda Idimu Road Egbeda, Lagos, Nigeria.</p>
                        <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div style="height:27em !important;" class="service-card">
                        <i class="fa fa-map-marker"></i>
                        <h3>DELIVERY TRACKING</h3>
                        <p>We'll provide you with a tracking code to allow you to keep up to date with the status of your delivery</p>
                        <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div style="height:27em !important;" class="service-card">
                        <i class="fa fa-bell"></i>
                        <h3>WE DELIVER!</h3>
                        <p>Once your package is delivered you get a notification, And that is it!</p>
                        <!-- <a href="#" class="default-btn-two">Try It Now!</a> -->
                    </div>
                </div>
            </div>
            {{-- <h4 class="text-center"><i>TRACKING - Total Transparency, More Control</i></h4> --}}
            <br/><br/>

            <!-- Choose Area -->


            <div class="section-title"><br/>
                <h2>WHAT WE DO</h2>
                {{-- <span>Easily and Quicker</span> --}}
            </div>
            <div class="speciality-slider owl-carousel owl-theme">
                
                <div class="speciality-card">
                    <a href="#">
                        <img height="320" src="https://images.pexels.com/photos/3434533/pexels-photo-3434533.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="image">
                    </a>
                    <div class="speciality-text">
                        <h3>
                            <a href="#">
                                BULK DELIVERY
                            </a>
                        </h3>
                        <p>Whether you are an eCommerce start-up business, online merchant, wholesaler, or a leading online brand. With regular convenient collection times, we deliver to your customers’ doorstep without any delay.</p>
                    </div>
                </div>

                <div class="speciality-card">
                    <a href="#">
                        <img height="320" src="{{asset('img/hero-slider/cou4.jpg')}}" alt="image">
                    </a>
                    <div class="speciality-text">
                        <h3>
                            <a href="#">
                                PARTNERSHIP
                            </a>
                        </h3>
                        <p>Our valued-added partnership service gives businesses the edge over competitors and assists in delivering customers orders. But that’s just not enough. You need peace of mind and we can offer it.</p>
                    </div>
                </div>


                

               
            </div>
        </div>
    </div>
    <!-- End Speciality Slider Area -->
    <div style="background: white;" class="choose-area">

        <div class="shape-one">
            <img src="{{asset('img/shape/shape5.png')}}" alt="Shape">
        </div>
        <div class="container">
             <div class="col-lg-12 col-md-12">
                    <div class="choose-text">
                        <div class="section-ttle">
                            <br/>
                            <h2 style="color:#301d44;"  class="text-center">Delivery Options</h2>
                            <span style="  font-size: 13px;
                            font-weight: 600;
                            display: block;
                            margin-bottom: 15px;
                            color: #f21860;
                            line-height: 1;" class="text-center">Speedy And Secured</span>
                        </div>
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
    
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> -->
    
                        <!-- <a href="#" class="default-btn-one">Contact Us</a> -->
                        <div class="shape-image">
                            <img src="{{asset('img/shape/shape2.png')}}" alt="icon">
                        </div>
                    </div>
                </div><br/>
            <div class="row justify-content-center">
                    <div style="height:182m !important;" class="col-md-4 choose-contant">
                        <div style="padding-top:2%;" class="choose-card">
                            <!-- <i class='bx bx-world'></i> -->
                            <h3>Same Day Delivery </h3>
                            <p>When it’s absolutely important it gets there today, we won’t be beaten on speed or efficiency. Just call us or use our online booking service.</p>
                        </div>
                    </div>
    
                    <div style="height:12em !important;" class="col-md-4 choose-contant">
                        <div style="padding-top:2%;" class="choose-card">
                            <!-- <i class='bx bxs-paper-plane'></i> -->
                            <h3>Next Day Delivery</h3>
                            <p>Getting your parcel where it needs to be is our top priority and with our range of next day delivery services you can have it there even faster than you thought. </p>
                        </div>
                    </div>
    
                    <div style="height:12em !important;" class="col-md-4 choose-contant">
                        <div style="padding-top:2%;" class="choose-card">
                            <!-- <i class='bx bxs-truck'></i> -->
                            <h3>Premium Delivery</h3>
                            <p>For urgent deliveries, when even Same Day Delivery isn’t fast enough, we are reliable and on point to assist  with your delivery.</p>
                        </div>
                    </div>
    
                  
    
               
            </div>
        </div>
    </div>
    <!-- End Choose Area -->
    

    <!-- Testimonials Slider Area -->
    <!-- <div class="testimonials-area ptb-100">
        <div class="container">
            <div class="shape-two">
                <img src="{{asset('img/shape/shape6.png')}}" class="shape-1" alt="shape">
                <img src="{{asset('img/shape/shape3.png')}}" alt="shape">
            </div>
            <div class="section-title">
                <span>Feedback</span>
                <h2>Whats Our Clients Said About Us</h2>
            </div>

            <div class="testimonials-slider owl-carousel owl-theme">
                <div class="testimonials-card">
                    <div class="client-img">
                        <img src="{{asset('img/clients/client6.jpg')}}" alt="image">
                        <h3>Jhon Smith</h3>
                        <span>CEO of LTD company</span>
                    </div>
                    
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div> 
                    
                    <div class="feedback-text">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>

                <div class="testimonials-card">
                    <div class="client-img">
                        <img src="{{asset('img/clients/client5.jpg')}}" alt="image">
                        <h3>William leo</h3>
                        <span>CEO of LTD company</span>
                    </div>
                    
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div> 

                    <div class="feedback-text">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>

                <div class="testimonials-card">
                    <div class="client-img">
                        <img src="{{asset('img/clients/client4.jpg')}}" alt="image">
                        <h3>Benjamin Liam</h3>
                        <span>CEO of LTD company</span>
                    </div>
                    
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div> 

                    <div class="feedback-text">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Testimonials Slider Area -->

    <!-- partner Slider Area -->
    <!-- <div class="partner-area pb-100">
        <div class="container">
            <div class="section-title">
                <span>Partner</span>
                <h2>20+ Companies Trusted us and Getting Result</h2>
            </div>

            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-slider-item">
                    <a href="#">
                        <img src="{{asset('img/partner/partner1.png')}}" alt="logo">
                    </a>
                </div>

                <div class="partner-slider-item">
                    <a href="#">
                        <img src="{{asset('img/partner/partner2.png')}}" alt="logo">
                    </a>
                </div>

                <div class="partner-slider-item">
                    <a href="#">
                        <img src="{{asset('img/partner/partner3.png')}}" alt="logo">
                    </a>
                </div>

                <div class="partner-slider-item">
                    <a href="#">
                        <img src="{{asset('img/partner/partner4.png')}}" alt="logo">
                    </a>
                </div>

                <div class="partner-slider-item">
                    <a href="#">
                        <img src="{{asset('img/partner/partner5.png')}}" alt="logo">
                    </a>
                </div>

                <div class="partner-slider-item">
                    <a href="#">
                        <img src="{{asset('img/partner/partner6.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End partner Slider Area -->

    <!-- Transportation Area -->
    <!-- <div class="transportation-area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="transportation-form ptb-100">
                        <div class="section-title">
                            <span>Transportation</span>
                            <h2>Take Your Goods Anywhere</h2>
                        </div>

                        <div class="transportation-shape">
                            <img src="{{asset('img/shape/shape3.png')}}" alt="icon">
                        </div>

                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Height (CM):">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Weight (KG):">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Width (CM):">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type of commodity:">
                            </div>

                            <div class="form-group mb-30">
                                <input type="text" class="form-control" placeholder="Distance (KM):">
                            </div>

                            <div class="form-btn">
                                <button type="submit" class="default-btn-one mr-4">Cost Calculate</button>
                                <button type="submit" class="default-btn-two">Get A Full Quote</button>
                            </div>
                            <h3>Get a brochure / 10% Discount on first order</h3>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="popup-video video-bg">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                        <i class="bx bx-play whiteText"></i>
                                        <span class="ripple pinkBg"></span>
                                        <span class="ripple pinkBg"></span>
                                        <span class="ripple pinkBg"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Transportation Area -->

@endsection
