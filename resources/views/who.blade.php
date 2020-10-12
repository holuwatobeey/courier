@extends('layouts.mainLayout')
@section('content')
        <!-- Page banner Area -->
        <div class="page-banner bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="page-content">
                                <h2>Services Portfolio</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>Service Portfolio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page banner Area -->
        <!-- Services Area -->
     <div class="services-area ptb-100">
        <div class="container">
            <div class="section-title">
                {{-- <span>What We Do</span> --}}

                <h4 style="color:;">Service Portfolio</h4>
            </div>

            <div class="row">
                <div style="height:28em;" class="card col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bxs-network-chart'></i>
                        <h3>BUSINESSES </h3>
                        <p>Whether you’re a small business or a large business, we specialise in pickup and delivery of parcels, documents, items and palette of goods with full end-to-end tracking in real time, giving you total transparency.</p>
                    </div>
                </div>

                <div  style="height:28em;" class="card col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bxs-user'></i>
                        <h3>INDIVIDUALS</h3>
                        <p>For package deliveries within the city, Pointout is here to serve you. we provide a cost-effective, guaranteed same day or next day delivery service. Simple to book, uniquely priced, safe, and speedily delivered to your doorstep.</p>
                    </div>
                </div>

                <div style="height:28em;" class="card col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bxs-truck'></i>
                        <h3>RETAIL</h3>
                        <p>With the advent of online shopping, the need to deliver direct to the customer is growing rapidly. The trick is to achieve this in a cost-effective manner whilst maintaining a high level of customer service. We have vast experience in this area.</p>
                    </div>
                </div>

                <div style="height:28em;" class="card col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bxs-cart'></i>
                        <h3>E- COMMERCE</h3>
                        <p>Our couriers ensure a reduction in delivery failures and provide a more flexible and efficient service for some of the biggest names in e-commerce.</p>
                    </div>
                </div>

                
            </div>
            <br/>
            <div class="row ">
                <div style="height:30em;" class="card  col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bxs-clinic'></i>
                        <h3>PHARMACEUTICAL  </h3>
                        <p>We provide a pharmacy to home delivery service, supporting pharmacy business delivering prescription to patients securely and cost-effectively.</p>
                    </div>
                </div>

                <div style="height:30em;" class="card col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bxs-school'></i>
                        <h3> LEGAL & LAW FIRM</h3>
                        <p>Our expert couriers are experienced in working with attorneys and paralegals. We’re familiar with legal regulations and can collaborate with your business to ensure your document arrives safely and securely.</p>
                    </div>
                </div>

                <div style="height:30em;" class="card col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bx-restaurant'></i>
                        <h3>RESTAURANT</h3>
                        <p>EatPoints is an innovative food delivery service invented to deliver your favorite meal to you from restaurants within your vicinity at affordable rates and in the fastest time possible by an EatPoints partner.</p>
                    </div>
                </div>

                <div style="height:30em;" class="card col-lg-3 col-sm-6">
                    <div class="card-body service-card">
                        <i class='bx bxs-bank'></i>
                        <h3>BANKING AND FINANCE</h3>
                        <p>Pointout Couriers’ experienced banking and finance couriers are equipped to deliver valuable and confidential financial documents. We understand the responsibility of delivering for the banking industry, and our couriers are specifically trained and vetted for the job.</p>
                    </div>
                </div>

               
                
            </div>

            
        </div>
        
        <div class="services-shape">

        </div>
    </div> 
    <!-- End Services Area -->
@endsection