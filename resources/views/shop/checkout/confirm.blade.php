@extends('shop.main')

@section('title', 'Thank You')

@section('extra-css')
    <style>
        .inner-bg {
            background: url("{{ settingsAdminImageExist(theme('checkout_parallax'),"checkout") }}") no-repeat center center fixed;
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
        <div class="inner-bg">
            <div class="inner-head wow fadeInDown">
                <h3>thank you</h3>
            </div>
        </div>
    </section>
    <!--page heading-->
    <!--container-->
    <div class="container">
        <div class="shop-in pl-0 pr-0">
            <div>
                <div class="bread2">
                    <ul>
                        <li><a href="{{ route('shop.home.index') }}">{{ theme('home_title') }}</a>
                        <li>/</li>
                        <li><a href="{{ route('shop.products.index') }}">{{ theme('shop_title') }}</a></li>
                        <li>/</li>
                        <li>Thank you</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div class="thanks-bg">
                <div class="thanks-img wow fadeIn"><img  src="{{ asset('assets/images/products/thanks.png') }}" alt="" title="" class="img-fluid"></div>
                <div class="thanks-text">
                    <h2 class="wow fadeIn">For Purchasing our product</h2>
                    <h3 class="wow fadeIn">Order details are sent to your registered email</h3>
                    <div><a href="{{ route('shop.home.index') }}" class="wow fadeInLeft">Back to Home page</a> <a href="{{ route('shop.products.index') }}" class="wow fadeInRight">Continue shopping</a> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--container-->
    <div class="clearfix"></div>
@endsection
