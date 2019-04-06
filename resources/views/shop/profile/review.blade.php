@extends('shop.main')

@section('title', theme('review_title').' for product '.$rate->product->name)

@section('extra-css')
    <style>
        .inner-bg1 {
            background: url("{{ settingsAdminImageExist(theme('review_parallax'),"review") }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding:150px 0
        }
    </style>
    {{ Html::style('assets/css/profile-order.css') }}
    {{ Html::style('assets/css/rating/star.css') }}
@endsection

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg1">
                <div class="inner-head wow fadeInDown">
                    <h3>{{ theme('review_title') }}</h3><br>
                </div>
            </div>
        </section>
        <!--container-->
        <div class="container">
            <div class="shop-in">
                <!--breadcrumbs -->
                <div class="col-md-12">
                    <div class="bread2">
                        <ul>
                            <li><a href="{{ route('shop.home.index') }}">{{ theme('home_title') }}</a></li>
                            <li>/</li>
                            <li><a href="{{ route('shop.profile.index') }}#star-tab">Reviews</a></li>
                            <li>/</li>
                            <li>{{ theme('review_title') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div><br>
                <div class="row">
                    <!--left-side-->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="clearfix"> </div><br>
                                <!-- Customer Sidebar-->
                                <div class="customer-sidebar">
                                    <div class="customer-profile">
                                        <a href="#" class="d-inline-block">
                                            <img src="{{ secure_asset('storage/' . $user->avatar) }}" class="img-fluid rounded-circle customer-image"></a>
                                        <h5>{{ $user->name }}</h5>
                                        @if(!empty($user->userDetail))
                                            <p class="text-muted text-small">{{ $user->userDetail->city }}, {{ $user->userDetail->country }}</p>
                                        @else
                                            <p class="text-muted text-small">City, COUNTRY</p>
                                        @endif
                                    </div>
                                    <nav class="list-group customer-nav">
                                        <a href="{{ route('shop.profile.index') }}#star-tab" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-chevron-left"></span>Back</span></a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--right-side-->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-pane fade show active" id="profile-tab">
                                    <div class="clearfix"> </div><br>
                                    <div class="table-responsive table-none wow fadeIn">
                                        {!! Form::open(['method' => 'POST','route' => ['shop.rating.update',$rate->id]]) !!}
                                            {{ csrf_field() }}
                                            <table class="table checkout-table">
                                                <tr>
                                                    <td class="text-center">
                                                        <a href="{{ route('shop.products.show',$rate->product->slug) }}">
                                                            <img src="{{ secure_asset('storage/'.$rate->product->image) }}" class="img-fluid" alt="" title="" width="110">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <h1>
                                                            <a href="{{ route('shop.products.show',$rate->product->slug) }}"><span>{{ $rate->product->name }}</span></a>
                                                        </h1>
                                                    </td>
                                                    <td class="text-center">
                                                        <input id="input-5" name="star" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="{{ $rate->rating }}" data-size="xl" data-showcaption=false required>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="sub-bt">
                                                            <button class="submit-css" type="submit">Update <i class="fa fa-star" aria-hidden="true"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        {!! Form::close() !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('extra-script')
    {{ Html::script('assets/js/rating/star.js') }}
@endsection
