@extends('shop.main')

@section('title', 'Service Unavailable')

@section('content')
    <!--container-->
    <div class="container">
        <div class="shop-in pl-0 pr-0">
            <div>
                <div class="bread2">
                    <ul>
                        <li><a href="{{ route('shop.home.index') }}">HOME</a>
                        <li>/</li>
                        <li>503</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div>
                <div class="contact-us wow fadeInDown bg-404">
                    <div class="four">
                        <img  src="{{ secure_asset('assets/images/warning.svg') }}" alt="" title="">
                        <h3>503</h3>
                        <h4>Service Unavailable</h4>
                        <a href="{{ route('shop.home.index') }}" class="link-txt">Back To Home <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--container-->
    <div class="clearfix"></div>
@endsection
