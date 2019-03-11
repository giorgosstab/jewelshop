@extends('shop.main')

@section('title', '| ' . $page->title)

@section('extra-css')
    <style>
        .inner-bg {
            background: url("{{ customPageImageParallaxExist($page->image_parallax) }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding:150px 0
        }
    </style>
    {!! $page->extra_css_top !!}
@endsection

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg">
                <div class="inner-head wow fadeInDown">
                    <h3>{{ $page->title }}</h3>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="shop-in">
                @if($page->breadcrumbs == 1)
                    <!--breadcrumbs -->
                    <div class="col-md-12">
                        <div class="bread2">
                            <ul>
                                <li><a href="{{ route('shop.home.index') }}">HOME</a></li>
                                <li>/</li>
                                <li>{{ $page->title }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                @endif
                @if($page->column_right_left == App\CustomPage::COLUMN_DEFAULT)
                    {!! $page->body !!}
                @endif
                @if($page->column_right_left == App\CustomPage::COLUMN_RIGHT)
                    <div class="row">
                        <!--left-side-->
                        <div class="col-lg-3 col-md-12 col-sm-12">
                            <button data-toggle="collapse" data-target="#div-open" class="menu-icon"></button>
                            <div class="clearfix"></div>
                            <div id="div-open" class="collapse  wow fadeIn">
                                <div class="row">
                                    @include('shop.layouts.hotdeals-shop')
                                    @include('shop.layouts.specialoffers-shop')
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="cat-div  wow fadeIn">
                                            <h2>Download our app</h2>
                                            <div class="download-our"> <a href="#" class="pull-left"><img  src="assets/images/app.png" alt="" title="" class="img-fluid"></a> <a href="#" class="pull-left"><img  src="assets/images/google-play.png" alt="" title="" class="img-fluid"></a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <!--right-side-->
                        <div class="col-lg-9 col-md-12 col-sm-12">
                            <div class="row">
                                {!! $page->body !!}
                            </div>
                        </div>
                    </div>
                @endif
                    @if($page->column_right_left == App\CustomPage::COLUMN_LEFT)
                        <div class="row">
                            <!--left-side-->
                            <div class="col-lg-9 col-md-12 col-sm-12">
                                <div class="row">
                                    {!! $page->body !!}
                                </div>
                            </div>
                            <!--right-side-->
                            <div class="col-lg-3 col-md-12 col-sm-12">
                                <button data-toggle="collapse" data-target="#div-open" class="menu-icon"></button>
                                <div class="clearfix"></div>
                                <div id="div-open" class="collapse  wow fadeIn">
                                    <div class="row">
                                        @include('shop.layouts.hotdeals-shop')
                                        @include('shop.layouts.specialoffers-shop')
                                        <div class="col-lg-12 col-md-6 col-sm-12">
                                            <div class="cat-div  wow fadeIn">
                                                <h2>Download our app</h2>
                                                <div class="download-our"> <a href="#" class="pull-left"><img  src="assets/images/app.png" alt="" title="" class="img-fluid"></a> <a href="#" class="pull-left"><img  src="assets/images/google-play.png" alt="" title="" class="img-fluid"></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                        </div>
                    @endif
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('extra-script')
    {!! $page->extra_js_bottom !!}
@endsection

