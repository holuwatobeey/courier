@extends('layouts.mainLayout')
@section('content')
        <!-- Page banner Area -->
        <div class="page-banner bg-2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="page-content">
                                <h2>Request A Delivery</h2>
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    <li>Request A Delivery</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br/>
            <!-- End Page banner Area -->
<!-- Choose Area -->



<!-- Speciality Slider Area -->
<div style="padding-bottom:10px; background:#301d44;" class="speciality-area ">
    <div class="container">
        <div class="section-title"><br/>
            <h2 style="color:white;">SCHEDULE A DELIVERY</h2>
            <span>More Opportunities, Less Hassle</span>
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
                    <i class='fa fa-car'></i>
                    <h3>DROP OFF OPTION</h3>
                    <p>With no extra fee, you can drop the parcel with us.</p>
                    <a href="#" class="default-btn-two">Schedule</a>
                </div>
            </div>
           
        </div>

    </div>
</div>
<br/>
<div class="d-flex justify-content-center">
<div style="margin-bottom:2%;" class="col-md-10">
        <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a style="color:#f21860;" class="nav-link active" data-toggle="tab" href="#home">DROP-OFF</a>
                </li>
                <li class="nav-item">
                  <a style="color:#f21860;" class="nav-link" data-toggle="tab" href="#menu1">COLLECTION</a>
                </li>
                
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active container" id="home">
                    <br/>
                    <form>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Name</label>
                        <input type="text" class="form-control" id="email" placeholder="Name" name="name" required><br/>
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required><br/>
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Phone Number</label>
                        <input type="text" class="form-control" id="email" placeholder="Phone Number" name="phone" required><br/>
                        </div><br/> 
                        <div class="col-md-6">
                                <label for="">Package Description</label>
                        <textarea class="form-control" id="email" placeholder="Package Description" name="desc" required></textarea>
                        </div><br/>
                    </div><br/>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Package Value</label>
                        <input type="text" class="form-control" id="email" placeholder="Package Monetary Value" name="pkg_value" required><br/>
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Package Size</label>
                        <select class="form-control" name="pkg_size" id="" required>
                            <option selected>Select package size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select><br/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Pick Up Date</label>
                        <input type="date" class="form-control" id="email" placeholder="Name" name="date" required><br/>
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Pick Up Time</label>
                        <input type="text" class="form-control" placeholder="Pick up time (E.g 9:00am - 10:00am)" name="time" required><br/>
                        </div> <br/>    
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Drop-Off Location</label>
                        <select class="form-control" name="d_loc" id="" required>
                            <option selected>Select Drop-Off Location</option>
                            <option value="">Select Drop-Off Location...</option>
                            <option value="Agege">Agege</option>
                            <option value="Alimosho">Alimosho</option>
                            <option value="Amuwo Odofin">Amuwo Odofin</option>
                            <option value="Apapa">Apapa</option>
                            <option value="Badagry">Badagry</option>
                            <option value="Eti Osa">Eti Osa</option>
                            <option value="Epe">Epe</option>
                            <option value="Ibeju Lekki">Ibeju Lekki</option>
                            <option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
                            <option value="Ikeja">Ikeja</option>
                            <option value="Ikorodu">Ikorodu</option>
                            <option value="Isheri">Isheri</option>
                            <option value="Kosofe">Kosofe</option>
                            <option value="Lagos Island">Lagos Island</option>
                            <option value="Lagos Mainland">Lagos Mainland</option>
                            <option value="Mushin">Mushin</option>
                            <option value="Oshodi">Oshodi</option>
                            <option value="Ojo">Ojo</option>
                            <option value="Somolu">Somolu</option>
                            <option value="Surulere">Surulere</option>
                        </select><br/>
                        </div><br/>
                        <div class="col-md-6">
                                <label for="">Drop-Off Address</label>
                        <input type="text" class="form-control" id="email" placeholder="Drop-Off Address" name="address" required><br/>
                        </div>
                        <div class="col-md-12">
                                <label for="">Delivery Option</label>
                        <select class="form-control" name="dev_opt" id="" required>
                            <option selected>Delivery Option</option>
                            <option value="same">Same Day Delivery</option>
                            <option value="next">Next Day Delivery</option>
                            <option value="premium">Premium Delivery</option>
                        </select><br/>
                        </div>
                    </div><br/>
                    <button type="submit" class="default-btn-one">Schedule</button>
                    </form>
                </div>
                <div class="tab-pane container" id="menu1">
                    <br/>
                <form>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Name</label>
                        <input type="text" class="form-control" id="email" placeholder="Name" name="name" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" required><br/>
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Phone Number</label>
                        <input type="text" class="form-control" id="email" placeholder="Phone Number" name="phone" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Package Description</label>
                        <textarea class="form-control" id="email" placeholder="Package Description" name="desc" required></textarea><br/>
                        </div><br/>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Package Value</label>
                        <input type="text" class="form-control" id="email" placeholder="Package Monetary Value" name="pkg_value" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Package Size</label>
                        <select class="form-control" name="pkg_size" id="" required>
                            <option selected>Select package size</option>
                            <option value="small">Small</option>
                            <option value="medium">Medium</option>
                            <option value="large">Large</option>
                        </select><br/>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="">Pick Up Date</label>
                        <input type="date" class="form-control" id="email" placeholder="Name" name="date" required><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Pick Up Time</label>
                        <input type="text" class="form-control" placeholder="Pick up time (E.g 9:00am - 10:00am)" name="time" required><br/>
                        </div> 
                    </div>
                    <div class="form-row">
                            <div class="col-md-6">
                                    <label for="">Pick-Up Location</label>
                            <select class="form-control" name="p_loc" id="" required>
                                <option selected>Select Pick-Up Location</option>
                                <option value="Agege">Agege</option>
                                <option value="Alimosho">Alimosho</option>
                                <option value="Amuwo Odofin">Amuwo Odofin</option>
                                <option value="Apapa">Apapa</option>
                                <option value="Badagry">Badagry</option>
                                <option value="Eti Osa">Eti Osa</option>
                                <option value="Epe">Epe</option>
                                <option value="Ibeju Lekki">Ibeju Lekki</option>
                                <option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
                                <option value="Ikeja">Ikeja</option>
                                <option value="Ikorodu">Ikorodu</option>
                                <option value="Isheri">Isheri</option>
                                <option value="Kosofe">Kosofe</option>
                                <option value="Lagos Island">Lagos Island</option>
                                <option value="Lagos Mainland">Lagos Mainland</option>
                                <option value="Mushin">Mushin</option>
                                <option value="Oshodi">Oshodi</option>
                                <option value="Ojo">Ojo</option>
                                <option value="Somolu">Somolu</option>
                                <option value="Surulere">Surulere</option>
                            </select><br/>
                            </div>
                            <div class="col-md-6">
                                    <label for="">Pick-Up Address</label>
                            <input type="text" class="form-control" id="email" placeholder="Pick-Up Address" name="p_address" required><br/>
                            </div>
                            
                        </div>
                    <div class="form-row">
                        <div class="col-md-6">
                                <label for="">Drop-Off Location</label>
                        <select class="form-control" name="d_loc" id="" required>
                            <option selected>Select Drop-Off Location</option>
                            <option value="Agege">Agege</option>
                            <option value="Alimosho">Alimosho</option>
                            <option value="Amuwo Odofin">Amuwo Odofin</option>
                            <option value="Apapa">Apapa</option>
                            <option value="Badagry">Badagry</option>
                            <option value="Eti Osa">Eti Osa</option>
                            <option value="Epe">Epe</option>
                            <option value="Ibeju Lekki">Ibeju Lekki</option>
                            <option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
                            <option value="Ikeja">Ikeja</option>
                            <option value="Ikorodu">Ikorodu</option>
                            <option value="Isheri">Isheri</option>
                            <option value="Kosofe">Kosofe</option>
                            <option value="Lagos Island">Lagos Island</option>
                            <option value="Lagos Mainland">Lagos Mainland</option>
                            <option value="Mushin">Mushin</option>
                            <option value="Oshodi">Oshodi</option>
                            <option value="Ojo">Ojo</option>
                            <option value="Somolu">Somolu</option>
                            <option value="Surulere">Surulere</option>
                        </select><br/>
                        </div>
                        <div class="col-md-6">
                                <label for="">Drop-Off Address</label>
                        <input type="text" class="form-control" id="email" placeholder="Drop-Off Address" name="address" required><br/>
                        </div>
                        <div class="col-md-12">
                           
                                <label for="">Delivery Option</label>
                        <select class="form-control" name="dev_opt" id="" required>
                            <option selected>Delivery Option</option>
                            <option value="same">Same Day Delivery</option>
                            <option value="next">Next Day Delivery</option>
                            <option value="premium">Premium Delivery</option>
                        </select><br/>
                        </div>
                    </div><br/>
                    <button type="submit" class="default-btn-one">Schedule</button>
                    </form>
                </div>
              </div>
</div>
</div>

@endsection