@extends('shop.main')

@section('title', theme('checkout_title'))

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
    @foreach($payments as $payment)
        {!! $payment->extra_css_top !!}
    @endforeach
@endsection

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg">
                <div class="inner-head wow fadeInDown">
                    <h3>{{ theme('checkout_title') }}</h3>
                </div>
            </div>
        </section>
        <!--page heading-->
        <!--container-->
        <div class="container">
            <div class="shop-in">
                <!--breadcrumbs -->
                <div class="bread2">
                    <ul>
                        <li><a href="{{ route('shop.home.index') }}">{{ theme('home_title') }}</a>
                        <li>/</li>
                        <li><a href="{{ route('shop.products.index') }}">{{ theme('shop_title') }}</a></li>
                        <li>/</li>
                        <li>{{ theme('checkout_title') }}</li>
                    </ul>
                </div>
                <!--breadcrumbs -->
                <div class="clearfix"> </div>
                @include('shop.messages.error')
                <div class="clearfix"> </div>
                <div class="checkout-boder">
                    <div class="row">
                        <!--left-side-->
                        <div class="col-md-6 col-sm-12 wow fadeIn">
                            <div class="left-bg">
                                @if(Cart::count() > 0)
                                    @foreach(Cart::content() as $item)
                                        <div class="check-img wow fadeIn">
                                            <div class="img-1">
                                                <span class="badge badge-warning badge-count">{{ $item->qty }}x</span>
                                                @if(Voyager::image($item->model->thumbnail('small')) && file_exists(Voyager::image($item->model->thumbnail('small'))))
                                                    <img src="{{ Voyager::image($item->model->thumbnail('small')) }}" class="img-fluid" alt="{{ $item->model->name }}" title="{{ $item->model->name }}" >
                                                @else
                                                    <img src="{{ productImage($item->model->image) }}" class="img-fluid"alt="{{ $item->model->name }}" title="{{ $item->model->name }}" width="300">
                                                @endif
                                            </div>
                                            <div class="title2">
                                                <div class="row m-0">
                                                    <div class="col-md-7 col-sm-7 col-xs-12">
                                                        <div class="product-name">Diamond ring - {{ $item->model->name }}</div>
                                                    </div>
                                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                                        <h2 class="rate-css2">€{{ $item->model->presentPrice() }}</h2>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-md-12 wow fadeIn">
                                <hr>
                                <div class="pull-left text-color">SUBTOTAL</div>
                                <div class="pull-right"><strong>€{{ presentPrice(Cart::subtotal()) }}</strong></div>
                                <div class="clearfix"> </div>
                                <hr>
                                @if(session()->has('coupon'))
                                    <div class="clearfix"> </div>
                                    <div class="pull-left text-color">Discount ({{ session()->get('coupon')['name'] }}) &nbsp </div>
                                    <div class="pull-right"><strong> - €{{ presentPrice($discount) }} </strong></div>
                                    <div class="clearfix"> </div>
                                    <hr>
                                    <div class="clearfix"> </div>
                                    <div class="pull-left text-color"> New Discount Subtotal </div>
                                    <div class="pull-right"><strong> €{{ presentPrice($newSubTotal) }} </strong></div>
                                    <div class="clearfix"> </div>
                                    <hr>
                                @endif

                                <div class="clearfix"> </div>
                                <div class="pull-left text-color"> TAX</div>
                                <div class="pull-right"><strong> €{{ presentPrice($newTax) }} </strong></div>
                                <div class="clearfix"> </div>
                                <hr>
                                <div class="clearfix"> </div>
                                <div class="pull-left text-color"> <strong>Total</strong> </div>
                                <div class="pull-right"><strong> €{{ presentPrice($newTotal) }} </strong></div>
                                <div class="clearfix"> </div>
                                <hr>
                                <br>
                            </div>
                        </div>
                        <!--right-side-->
                        <div class="col-md-6 col-sm-12  wow fadeIn">
                            <div class="clearfix"> </div>
                            <div class="right-form">
                                <form action="{{ route('shop.checkout.store') }}" method="POST" id="payment-form">
                                    {{ csrf_field() }}
                                    <div class="clearfix"> </div><br>
                                    <div class="collapse-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingInfos">
                                            <h3 class="panel-title panel-border-circle">
                                                <a role="button" data-toggle="collapse" href="#collapseInfo" aria-expanded="true" aria-controls="collapseInfo" class="trigger collapsed">
                                                    &nbsp I. Personal information</span>
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseInfo" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingInfo">
                                            <div class="panel-body">
                                                <div class="row m-0">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <input type="text" id="fname" name="fname" placeholder="FIRST NAME" value="@if(auth()->user()){{ strtok( auth()->user()->name,' ') }}@else {{ old('fname') }}@endif">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="address" type="text" name="address" placeholder="ADDRESS" value="@if(auth()->user()){{ auth()->user()->userDetail->address }}@else {{ old('address') }}@endif">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="email" placeholder="EMAIL ADDRESS" value="@if(auth()->user()){{ auth()->user()->email }}@else {{ old('email') }}@endif">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="phone" placeholder="PHONE NUMBER" class="customphone" value="@if(auth()->user()){{ auth()->user()->userDetail->phone }}@else {{ old('phone') }}@endif">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="zip_code" type="text" name="zip_code" placeholder="ZIPCODE" class="customzip" value="@if(auth()->user()){{ auth()->user()->userDetail->postal_code }}@else {{ old('zip_code') }}@endif">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <input type="text" name="lname" placeholder="LAST NAME" value="@if(auth()->user()){{ strstr( auth()->user()->name,' ') }}@else {{ old('lname') }} @endif">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="row m-0">
                                                            <div class="col-md-6 padd0">
                                                                <div class="form-group">
                                                                    <input type="text" name="hnumber" placeholder="HOUSE NO." value="@if(auth()->user()){{ auth()->user()->userDetail->house_number }}@else {{ old('hnumber') }}@endif">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 padd0">
                                                                <div class="form-group">
                                                                    <input id="locality" type="text" name="locality" placeholder="LOCALITY"  value="@if(auth()->user()){{ auth()->user()->userDetail->locality }}@else {{ old('locality') }}@endif">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <input id="city" type="text" name="city" placeholder="CITY"  value="@if(auth()->user()){{ auth()->user()->userDetail->city }}@else {{ old('city') }}@endif">
                                                        </div>
                                                        <div class="form-group">
                                                            <select id="checkout-country" class="js-countries" name="country">
                                                                <option value="" disabled="" selected="selected">Please select your country</option>
                                                                <option value="GREECE" {{ old('country') == 'GREECE' ? 'selected' : '' }}>GREECE </option>
                                                                <option value="CYPRUS" {{ old('country') == 'CYPRUS' ? 'selected' : '' }}>CYPRUS </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea id="instructions" name="instructions" rows="5" cols=55" placeholder="Write information for seller here..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-12">
                                                    <div class="ship2">
                                                        <div>
                                                            <input type="checkbox" id="dif_shipping" name="dif_shipping" data-toggle="collapse" data-target="#div-show">
                                                            DIFFERENT SHIPPING ADDRESS
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="double-b"></div>
                                                <div id="div-show" class="collapse">
                                                    <div class="row m-0">
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <input type="text" name="fname_sec" placeholder="FIRST NAME" value="{{ old('fname_sec') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="address_sec" placeholder="ADDRESS" value="{{ old('address_sec') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="email_sec" placeholder="EMAIL ADDRESS" value="{{ old('email_sec') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="phone_sec" placeholder="PHONE NUMBER" value="{{ old('phone_sec') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" name="zipcode_sec" placeholder="ZIPCODE" value="{{ old('zipcode_sec') }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <input type="text" name="lname_sec" placeholder="LAST NAME" value="{{ old('lname_sec') }}">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="row m-0">
                                                                <div class="col-md-6 padd0">
                                                                    <div class="form-group">
                                                                        <input type="text" name="hnumber_sec" placeholder="HOUSE NO." value="{{ old('hnumber_sec') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 padd0">
                                                                    <div class="form-group">
                                                                        <input type="text" name="locality_sec" placeholder="LOCALITY" value="{{ old('locality_sec') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="form-group">
                                                                <input type="text" name="city_sec" placeholder="CITY" value="{{ old('city_sec') }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="js-countries" name="country_sec">
                                                                    <option disabled="" selected="selected">Please select your country</option>
                                                                    <option value="GREECE" {{ old('country_sec') == 'GREECE' ? 'selected' : '' }}>GREECE </option>
                                                                    <option value="CYPRUS" {{ old('country_sec') == 'CYPRUS' ? 'selected' : '' }}>CYPRUS </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingDelivery">
                                            <h3 class="panel-title panel-border-circle">
                                                <a role="button" data-toggle="collapse" href="#collapseDelivery" aria-expanded="true" aria-controls="collapseDelivery" class="trigger collapsed">
                                                    &nbsp II. Delivery Method
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapseDelivery" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDelivery">
                                            <div class="panel-body">
                                                <div class="credit-card" id="credit-cardExample">
                                                    <div class="row">
                                                        @foreach($deliveries as $delivery)
                                                            <div class="form-group col-6 col-sm-4 col-md-4 box">
                                                                <img src="{{ secure_asset('storage/'.$delivery->image) }}" alt="..." class="img-thumbnail img-check pick">
                                                                <input hidden type="radio" name="delivery" id="{{ $delivery->slug }}" value="{{ $delivery->name }}" class="form-check-input">
                                                                <label class="form-check-label" for="{{ $delivery->slug }}">{{ $delivery->description }}</label>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                    <div class="errorDelivery"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingPayment">
                                            <h3 class="panel-title panel-border-circle">
                                                <a role="button" data-toggle="collapse" href="#collapsePayment" aria-expanded="true" aria-controls="collapsePayment" class="trigger collapsed">
                                                    &nbsp III. Payment Method
                                                </a>
                                            </h3>
                                        </div>
                                        <div id="collapsePayment" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingPayment">
                                            <div class="panel-body">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="credit-card" id="credit-card">
                                                        {{--<div class="cc-selector-2">--}}
                                                            {{--<input id="stripe" type="checkbox" name="card" value="stripe" data-toggle="collapse" data-target="#show-stripe" aria-expanded="true" aria-controls="show-stripe" />--}}
                                                            {{--<label class="drinkcard-cc stripe" for="stripe"></label>--}}
                                                            {{--<input id="paypal" type="checkbox" name="card" value="paypal" data-toggle="collapse" data-target="#show-paypal" aria-expanded="false" aria-controls="show-paypal" />--}}
                                                            {{--<label class="drinkcard-cc paypal" for="paypal"></label>--}}
                                                            {{--<input id="cash" type="checkbox" name="card" value="cash" data-toggle="collapse" data-target="#show-cash" aria-expanded="true" aria-controls="show-cash" />--}}
                                                            {{--<label class="drinkcard-cc cash" for="cash"></label>--}}
                                                        {{--</div>--}}
                                                        <div class="row">
                                                            @foreach($payments as $payment)
                                                                <div class="form-group col-6 col-sm-4 col-md-4 box">
                                                                    <img src="{{ secure_asset('storage/'.$payment->image) }}" alt="{{ $payment->name }}" class="img-thumbnail"><br>
                                                                    <div class="form-check form-check-inline">
                                                                        <input type="checkbox" name="card" id="{{ $payment->slug }}" value="{{ $payment->name }}" class="checkbox form-check-input checkPayment" data-toggle="collapse" data-target="#show-{{ $payment->slug }}" aria-expanded="true" aria-controls="show-{{ $payment->slug }}">
                                                                        <label class="form-check-label pick" for="{{ $payment->slug }}">{{ $payment->name }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <div class="errorCard"></div>
                                                        @foreach($payments as $payment)
                                                            <div id="show-{{ $payment->slug }}" class="collapse" data-parent="#credit-card">
                                                                {!! $payment->extra_code !!}
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ship2">
                                            <input type="checkbox" class="checkbox" name="agree">
                                            <strong class="agree">I AGREE TO THE <a href="{{ url('/privacy') }}">TERMS & CONDITIONS</a></strong>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="buy-this">
                                            {!! Form::button('PAY NOW',['type' => 'submit','id' => 'complete-order']) !!}
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('extra-script')
    {{ Html::script('assets/js/validator/jquery.validate.min.js') }}
    {{ Html::script('assets/js/validator/additional-methods.min.js') }}
    {{ Html::script('assets/js/radiobuttonDelivery.js') }}
    {{ Html::script('assets/js/checkboxPayment.js') }}
    {{ Html::script('assets/js/validator/checkout/validationCheckout.js') }}
    {{ Html::script('assets/js/credit-cart/stripe/stripe.js') }}
    @foreach($payments as $payment)
        {!! $payment->extra_js_bottom !!}
    @endforeach
    <script>
        $(document).ready(function () {
            $("#div-show").find(":input").addClass("ignore");

            $('#stripe').prop('checked', true);
            $('#show-stripe').collapse('show');

            $('#stripe').on('change',function(){
                if ($(this).is(':checked')) {
                    stripeClass.handleFormSubmit();
                }
            });
            $('#complete-order').on('click',function(){
                validateAndSubmit();
            });

            $("#div-show").on("hide.bs.collapse", function(){
               $(this).find(":input").addClass("ignore")
            });

            $("#div-show").on("show.bs.collapse", function(){
                $(this).find(":input").removeClass("ignore")
            });

            $("#show-stripe").on("hide.bs.collapse", function(){
                $(this).find(":input").addClass("ignore")
            });

            $("#show-stripe").on("show.bs.collapse", function(){
                $(this).find(":input").removeClass("ignore")
            });
        });
        function validateAndSubmit(){
            let form = $('#payment-form');

            form.validate().form();
            if (form.validate().valid()){
                document.getElementById("payment-form").submit();
            }
        }
    </script>
@endsection
