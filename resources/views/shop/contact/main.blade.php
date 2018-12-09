@extends('shop.main')

@section('title', '| Contact Us')

@section('extra-css')
    <style>
        .inner-bg3 {
            background: url("{{ settingsAdminImageExist(setting('site.contact_parallax'),"contact") }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding:150px 0
        }
    </style>
@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="inner-bg3">
            <div class="inner-head wow fadeInDown">
                <h3>Contact Us</h3>
            </div>
        </div>
    </section>
    <!--page heading-->
    <!--container-->
    <div class="container">
        <div class="shop-in pl-0 pr-0">
            <!--breadcrumbs -->
            <div class="bread2">
                <ul>
                    <li><a href="index-2.html">HOME</a>
                    <li>/</li>
                    <li>CONTACT US</li>
                </ul>
            </div>
            <!--breadcrumbs -->
            <div class="clearfix"> </div>
            <!--contact-form-->
            <div class="contact-us">
                <div class="contact-in">
                    <h1 class="wow fadeIn">&nbsp; <img  src="assets/images/products/contact-logo.png" alt="" title="" class="img-fluid">&nbsp;</h1>
                    <h2 class="wow fadeIn">Customer Service</h2>
                    <h4 class="wow fadeIn">We are happy to hear from you and are ready to assist you </h4>
                    <div class="clearfix"> </div>
                    <div class="row m-0">        <div class="col-md-6 wow fadeIn">
                            <div class="overlay" onClick="style.pointerEvents='none'"></div>
                            <div class="map-div wow fadeIn text-center">
                                <div id='mapkit-1507'></div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-6  wow fadeIn">
                            <h5>Do you have a question</h5>
                            <h3>Send us your message</h3>
                            <div class="clearfix"> </div>
                            <div class="form-2">
                                <form action="http://www.creativethemes.co.in/" method="post" id="contactForm">
                                    <div class="form-group">
                                        <input placeholder="FIRST NAME" name="fname" id="fname" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="LAST NAME" name="lname" id="lname" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Phone Number" name="phone" id="phone" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="Email Address" name="email" id="email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker" name="country" id="country" data-style="btn-primary">
                                            <option value="">SELECT YOUR COUNTRY</option>
                                            <option value="India">India</option>
                                            <option value="US">US</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input placeholder="MESSAGE" name="message" id="message" type="text">
                                    </div>
                                    <div class="sub-bt">
                                        <button   class="submit-css" type="button" onClick="return ajaxmailcontact();">SEND MESSAGE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"> </div>
                        </div></div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--contact-form-->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- container-->
    <div class="clearfix"></div>
@endsection