<body>
    <!-- Preloder -->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
            </div>
        </div>
    </div>
    <!-- End Preloder -->
    
    <!-- Heder Area -->
    <header class="header-area">
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <ul class="left-info">
                           
                            <li>
                                    
                                   
                                    <a href="tel: +2349040002211"><i class='bx bxs-phone-call'></i> (+234) 904 000 2211 </a>  <a href="tel: +2349075555000"> &nbsp;&nbsp; <i class="fa fa-whatsapp" style="font-size:17px"></i>(+234) 907 555 5000</a>   
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <ul class="right-info">
                                <li class="mr-20">
                                    <a href="mailto:delivery@pointoutcourier.com.ng">
                                        <i class='bx bxs-envelope'></i>
                                        delivery@pointoutcourier.com.ng
                                    </a>
                                </li>
                           
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="ferry-responsive-nav">
                <div class="container">
                    <div class="ferry-responsive-menu">
                        <div class="logo">
                            <a href="/">
                                <img  style="height:35px !important;" src="{{asset('img/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ferry-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="/">
                            <img style="height:35px !important;" src="{{asset('img/logo.png')}}" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="/" class="nav-link active">
                                        Home
                                    </a>
                                   
                                </li>

                               

                            
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Company  <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="/about" class="nav-link">Company</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Pricing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="/careers" class="nav-link">
                                                Careers 
                                            </a>
                                            
                                        </li>

                                    </ul>
                                </li>

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Who We Serve <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Delivery Options </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">Schedule A Delivery</a>
                                        </li>

                    
                                    </ul>
                                </li> -->

                                <li class="nav-item">
                                    <a href="/services-portfolio" class="nav-link">
                                        Services Portfolio 
                                    </a>
                                    
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Delivery Options 
                                    </a>
                                    
                                </li> --}}
                                <li class="nav-item">
                                    <a href="/schedule" class="nav-link">
                                        Request A Delivery 
                                    </a>
                                    
                                </li>
                                


                               

                                <li class="nav-item">
                                    <a href="/contact-us" class="nav-link">Get In Touch</a>
                                </li>


                                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{ Auth::user()->username }}   <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                          
                        @endguest
<!-- 
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Sign Up</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Sign In</a>
                                </li> -->

                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
    </header>
    <!-- End Heder Area -->