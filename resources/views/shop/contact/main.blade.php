@extends('shop.main')

@section('title', '| Contact Us')

@section('extra-css')
    {!!  GoogleReCaptchaV3::requireJs() !!}
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
                    <li><a href="{{ route('shop.home.index') }}">HOME</a>
                    <li>/</li>
                    <li>CONTACT US</li>
                </ul>
            </div>
            <!--breadcrumbs -->
            <div class="clearfix"> </div>
            @include('shop.messages.error')
            <!--contact-form-->
            <div class="contact-us">
                <div class="contact-in">
                    <h1 class="wow fadeIn">&nbsp;
                        <img  src="{{ secure_asset('assets/images/products/contact-logo.png') }}" alt="Contact JewelShop" title="Contact JewelShop" class="img-fluid">&nbsp;
                    </h1>
                    <h2 class="wow fadeIn">Customer Service</h2>
                    <h4 class="wow fadeIn">We are happy to hear from you and are ready to assist you </h4>
                    <div class="clearfix"> </div>
                    <div class="row m-0">
                        <div class="col-md-6 wow fadeIn">
                            <div class="map-div wow fadeIn text-center">
                                <div id='mapkit-1507'>
                                    {!! Mapper::render() !!}
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="col-md-6  wow fadeIn">
                            <h5>Do you have a question</h5>
                            <h3>Send us your message</h3>
                            <div class="clearfix"> </div>
                            <div class="form-2">
                                <form action="{{ route('shop.contact.store') }}" method="post" id="contact-form">
                                    {{ csrf_field() }}
                                    {!!  GoogleReCaptchaV3::render('contact_us') !!}
                                    <div class="form-group">
                                        <input type="text" name="fname" placeholder="FIRST NAME" value="{{ old('fname') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="lname" placeholder="LAST NAME" value="{{ old('lname') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="PHONE NUMBER" value="{{ old('phone') }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" placeholder="EMAIL ADDRESS" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker" name="country" data-style="btn-primary">
                                            <option value="" disabled="" selected="selected">SELECT YOUR COUNTRY</option>
                                            <option value="GREECE" {{ old('country') == 'GREECE' ? 'selected' : '' }}>GREECE</option>
                                            <option value="CYPRUS" {{ old('country') == 'CYPRUS' ? 'selected' : '' }}>CYPRUS</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <textarea style="height: 100px;" type="text" name="message" placeholder="TYPE YOUR MESSAGE" value="{{ old('message') }}"></textarea>
                                    </div>
                                    <div class="sub-bt">
                                        <button class="submit-css" type="submit">SEND MESSAGE <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
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

@section('extra-script')
    {{ Mapper::renderJavascript() }}
    {{ Html::script('assets/js/validator/jquery.validate.min.js') }}
    {{ Html::script('assets/js/validator/additional-methods.min.js') }}
    {{ Html::script('assets/js/validator/contact/validationContact.js') }}
@endsection
