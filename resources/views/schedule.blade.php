@extends('layouts.mainLayout')
@section('content')
        <!-- Page banner Area -->
        <div class="page-banner bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="page-content">
                                <h2>Schedule A Delivery</h2>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Schedule</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br/>
            <!-- End Page banner Area -->
<!-- Choose Area -->

<div class="choose-area">

    <div class="shape-one">
        <img src="{{asset('img/shape/shape5.png')}}" alt="Shape">
    </div>
    <div class="container">
         <div class="col-lg-12 col-md-12">
                <div class="choose-text">
                    <div class="section-ttle">
                        <span style="  font-size: 13px;
                        font-weight: 600;
                        display: block;
                        margin-bottom: 15px;
                        color: #f21860;
                        line-height: 1;" class="text-center">Delivery Options</span>
                        <h2 style="color:#301d44;" class="text-center">Cheap, Fast and Secured </h2>
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

<!-- Speciality Slider Area -->
<div style="padding-bottom:10px; background:white;" class="speciality-area">
    <div class="container">
        <div class="section-title"><br/>
            <span>SCHEDULE A DELIVERY</span>
            <h2>More Opportunities, Less Hassle</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div style="height:24em !important;" class="service-card">
                    <i class='bx bxs-truck'></i>
                    <h3>COLLECTION</h3>
                    <p>Simply book when it best suits you and our couriers will pickup on demand . All you have to do is outline the package you need delivered and we’ll suggest the fastest, cheapest and most environmentally friendly option.</p>
                    <a href="#" class="default-btn-two">Schedule</a>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6">
                <div style="height:24em !important;" class="service-card">
                    <i class='bx bxs-truck'></i>
                    <h3>DROP OFF OPTION</h3>
                    <p>With no extra fee, you can drop the parcel with us.</p>
                    <a href="#" class="default-btn-two">Schedule</a>
                </div>
            </div>
           
        </div>


        <!-- <div class="speciality-slider owl-carousel owl-theme">
            <div class="speciality-card">
                <a href="#">
                    <img src="{{asset('img/speciality/speciality1.jpg')}}" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="#">
                            Office Relocation
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>

            <div class="speciality-card">
                <a href="#">
                    <img src="{{asset('img/speciality/speciality2.jpg')}}" alt="image">
                </a>
                <div class="speciality-text">
                    <h3>
                        <a href="#">
                            House Moving
                        </a>
                    </h3>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete.</p>
                </div>
            </div>

            

           
        </div> -->
    </div>
</div>

@endsection