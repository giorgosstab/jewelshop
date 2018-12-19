@extends('shop.main')

@section('title', '| Checkout')

@section('extra-css')
    <script type="application/javascript" src="https://js.stripe.com/v3"></script>
@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="inner-bg">
            <div class="inner-head wow fadeInDown">
                <h3>Checkout </h3>
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
                    <li><a href="{{ route('shop.home.index') }}">HOME</a>
                    <li>/</li>
                    <li><a href="{{ route('shop.products.index') }}">SHOP</a></li>
                    <li>/</li>
                    <li>Checkout</li>
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
                                            <img  src="assets/images/products/check-out-img.jpg" alt="" title="" class="img-fluid">
                                            <span class="badge badge-warning">{{ $item->qty }}x</span>
                                        </div>
                                        <div class="title2">
                                            <div class="row m-0">
                                                <div class="col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product-name">Diamond ring - {{ $item->model->name }}</div>
                                                </div>
                                                <div class="col-md-5 col-sm-5 col-xs-12">
                                                    <h2 class="rate-css2">€{{ number_format($item->subtotal,2) }}</h2>
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
                            <div class="pull-right"><strong>€{{ number_format(Cart::subtotal(), 2) }}</strong></div>
                            <div class="clearfix"> </div>
                            <hr>
                            @if(session()->has('coupon'))
                                <div class="clearfix"> </div>
                                <div class="pull-left text-color">Discount ({{ session()->get('coupon')['name'] }}) &nbsp </div>
                                    {!! Form::open(['method' => 'POST','route' => 'shop.coupons.destroy', 'id' => 'deleteDiscount']) !!}
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="#" onclick="document.getElementById('deleteDiscount').submit()"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    {!! Form::close() !!}

                                <div class="pull-right"><strong> - €{{ number_format($discount, 2) }} </strong></div>
                                <div class="clearfix"> </div>
                                <hr>
                                <div class="clearfix"> </div>
                                <div class="pull-left text-color"> New Discount Subtotal </div>
                                <div class="pull-right"><strong> €{{ number_format($newSubTotal, 2) }} </strong></div>
                                <div class="clearfix"> </div>
                                <hr>
                            @endif

                            <div class="clearfix"> </div>
                            <div class="pull-left text-color"> TAX</div>
                            <div class="pull-right"><strong> €{{ number_format($newTax, 2) }} </strong></div>
                            <div class="clearfix"> </div>
                            <hr>
                            <div class="clearfix"> </div>
                            <div class="pull-left text-color"> <strong>Total</strong> </div>
                            <div class="pull-right"><strong> €{{ number_format($newTotal, 2) }} </strong></div>
                            <div class="clearfix"> </div>
                            <hr>
                            <br>
                        </div>
                        @if(! session()->has('coupon'))
                            <div class="col-md-12 cat-div  wow fadeIn">
                                <h2>Coupon Code</h2>
                                <div class="clearfix"></div><br>
                                <div class="row">
                                    <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                        <h4>If you have a coupon code, please enter it in the box below</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div><br>
                                <div class="row">
                                    <form class="discount-div" action="{{ route('shop.coupons.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <span> &nbsp Discount Code?</span>
                                        <input type="text" class="discount" name="coupon_code" id="coupon_code">
                                        <input type="submit" value="APPLY" class="apply">
                                        <div class="clearfix"></div>
                                        <br>
                                    </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        @endif
                    </div>
                    <!--right-side-->
                    <div class="col-md-6 col-sm-12  wow fadeIn">
                        <div class="clearfix"> </div>
                        <div class="right-form">
                            {!! Form::open(['method' => 'POST','route' => 'shop.checkout.store', 'id' => 'payment-form']) !!}
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
                                                            <input type="text" id="fname" name="fname" placeholder="FIRST NAME" value="{{ old('fname') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="address" type="text" name="address" placeholder="ADDRESS" value="{{ old('address') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            @if(auth()->user())
                                                                <input type="text" name="email" placeholder="EMAIL ADDRESS" value="{{ auth()->user()->email }}">
                                                            @else
                                                                <input type="text" name="email" placeholder="EMAIL ADDRESS" value="{{ old('email') }}">
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="phone" placeholder="PHONE NUMBER" class="customphone" value="{{ old('phone') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="zip_code" type="text" name="zip_code" placeholder="ZIPCODE" class="customzip" value="{{ old('zip_code') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <input type="text" name="lname" placeholder="LAST NAME" value="{{ old('lname') }}">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="row m-0">
                                                            <div class="col-md-6 padd0">
                                                                <div class="form-group">
                                                                    <input type="text" name="hnumber" placeholder="HOUSE NO." value="{{ old('hnumber') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 padd0">
                                                                <div class="form-group">
                                                                    <input id="locality" type="text" name="locality" placeholder="LOCALITY"  value="{{ old('locality') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <input id="city" type="text" name="city" placeholder="CITY"  value="{{ old('city') }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <select id="checkout-country" class="js-countries" name="country">
                                                                <option value="" disabled="" selected="selected">Please select your country</option>
                                                                <option value="38" {{ old('country') == 38 ? 'selected' : '' }}>CANADA </option>
                                                                <option value="232" {{ old('country') == 232 ? 'selected' : '' }}>UNITED STATES </option>
                                                            </select>
                                                        </div>
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
                                                                    <option value="1" {{ old('country_sec') == 1 ? 'selected' : '' }}>CANADA </option>
                                                                    <option value="2" {{ old('country_sec') == 2 ? 'selected' : '' }}>UNITED STATES </option>
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
                                                    <div class="cc-selector-2">
                                                        <input id="acs" type="radio" name="delivery" />
                                                        <label class="drinkcard-cc acs" for="acs"></label>
                                                        <input id="geniki" type="radio" name="delivery" />
                                                        <label class="drinkcard-cc geniki" for="geniki"></label>
                                                        <input id="metaforikh" type="radio" name="delivery" />
                                                        <label class="drinkcard-cc metaforikh" for="metaforikh"></label>
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
                                                        <div class="cc-selector-2">
                                                            <input id="stripe" type="checkbox" name="card" value="" data-toggle="collapse" data-target="#show-stripe" aria-expanded="true" aria-controls="show-stripe" />
                                                            <label class="drinkcard-cc stripe" for="stripe"></label>
                                                            <input id="paypal" type="checkbox" name="card" value="" data-toggle="collapse" data-target="#show-paypal" aria-expanded="false" aria-controls="show-paypal" />
                                                            <label class="drinkcard-cc paypal" for="paypal"></label>
                                                            <input id="cash" type="checkbox" name="card" value="" data-toggle="collapse" data-target="#show-cash" aria-expanded="true" aria-controls="show-cash" />
                                                            <label class="drinkcard-cc cash" for="cash"></label>
                                                        </div>
                                                        <div class="errorCard"></div>
                                                        <div id="show-stripe" class="collapse" data-parent="#credit-card">
                                                            <div class="form-group">
                                                                <input id="holder-name" type="text" placeholder="Holder Name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="card-element">
                                                                    Credit or debit card
                                                                </label>
                                                                <div id="card-element">
                                                                    <!-- A Stripe Element will be inserted here. -->
                                                                </div>
                                                                <!-- Used to display form errors. -->
                                                                <div id="card-errors" role="alert"></div>
                                                            </div>
                                                        </div>
                                                        <div id="show-paypal" class="collapse" data-parent="#credit-card">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Holder Name">
                                                            </div>
                                                            <div class="form-group">

                                                            </div>
                                                        </div>
                                                        <div id="show-cash" class="collapse" data-parent="#credit-card"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="ship2">
                                            <input type="checkbox" class="checkbox" name="agree">
                                            <strong class="agree">I AGREE TO THE <a href="{{ route('shop.privacy.index') }}">TERMS & CONDITIONS</a></strong>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="buy-this">
                                            {!! Form::button('PAY NOW',['type' => 'submit','id' => 'complete-order']) !!}
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            {!! Form::open() !!}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('extra-script')
    {{ Html::script('assets/js/validator/jquery.validate.min.js') }}
    {{ Html::script('assets/js/validator/additional-methods.min.js') }}
    {{ Html::script('assets/js/checkboxPayment.js') }}
    {{ Html::script('assets/js/validator/checkout/validationCheckout.js') }}
    {{ Html::script('assets/js/credit-cart/stripe/stripe.js') }}
@endsection
