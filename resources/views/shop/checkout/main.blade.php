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
                    <li><a href="index-2.html">HOME</a>
                    <li>/</li>
                    <li><a href="product.html">SHOP</a></li>
                    <li>/</li>
                    <li>Checkout</li>
                </ul>
            </div>
            <!--breadcrumbs -->
            <div class="clearfix"> </div>
            <div class="checkout-boder">
                <div class="row">
                    <!--left-side-->
                    <div class="col-md-6 col-sm-12 wow fadeIn">
                        <div class="left-bg">
                            @if(Cart::count() > 0)
                                @foreach(Cart::content() as $item)
                                    <div class="check-img wow fadeIn">
                                        <div class="img-1"><img  src="assets/images/products/check-out-img.jpg" alt="" title="" class="img-fluid"></div>
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
                            <div class="pull-right"><strong>€{{ Cart::subtotal() }}</strong></div>
                            <div class="clearfix"> </div>
                            <hr>
                            <div class="clearfix"> </div>
                            <div class="pull-left text-color"> TAX</div>
                            <div class="pull-right"><strong> €{{ Cart::tax() }} </strong></div>
                            <div class="clearfix"> </div>
                            <hr>
                            <div class="clearfix"> </div>
                            <div class="pull-left text-color"> Discount </div>
                            <div class="pull-right"><strong> $ 3.00 </strong></div>
                            <div class="clearfix"> </div>
                            <hr>
                            <div class="clearfix"> </div>
                            <div class="pull-left text-color"> <strong>Total</strong> </div>
                            <div class="pull-right"><strong> €{{ Cart::total() }} </strong></div>
                            <div class="clearfix"> </div>
                            <hr>
                            <br>
                        </div>
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
                                                            <input type="text" placeholder="FIRST NAME">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="address" type="text" placeholder="ADDRESS">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="EMAIL ADDRESS">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="PHONE NUMBER">
                                                        </div>
                                                        <div class="form-group">
                                                            <input id="zip-code" type="text" placeholder="ZIPCODE">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="LAST NAME">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="row m-0">
                                                            <div class="col-md-6 padd0">
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="HOUSE NO.">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 padd0">
                                                                <div class="form-group">
                                                                    <input id="locality" type="text" placeholder="LOCALITY">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <div class="form-group">
                                                            <input id="city" type="text" placeholder="CITY">
                                                        </div>
                                                        <div class="form-group">
                                                            <select id="checkout-country" class="js-countries">
                                                                <option disabled="" selected="selected">Please select your country</option>
                                                                <option value="38"> CANADA </option>
                                                                <option value="232"> UNITED STATES </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input placeholder="BIRTHDATE (OPTIONAL)" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="col-md-12">
                                                    <div class="ship2">
                                                        <div>
                                                            <input type="checkbox" value="" data-toggle="collapse" data-target="#div-show">
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
                                                                <input type="text" placeholder="FIRST NAME">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="ADDRESS">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="EMAIL ADDRESS">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="PHONE NUMBER">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="ZIPCODE">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="LAST NAME">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="row m-0">  <div class="col-md-6 padd0">
                                                                    <div class="form-group">
                                                                        <input type="text" placeholder="HOUSE NO.">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 padd0">
                                                                    <div class="form-group">
                                                                        <input type="text" placeholder="LOCALITY">
                                                                    </div>
                                                                </div></div>
                                                            <div class="clearfix"></div>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="CITY">
                                                            </div>
                                                            <div class="form-group">
                                                                <select class="js-countries">
                                                                    <option disabled="" selected="selected">Please select your country</option>
                                                                    <option value="38">CANADA </option>
                                                                    <option value="232">UNITED STATES </option>
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
                                                    <div class="cc-selector-2 options">
                                                        <input id="acs" type="radio" name="delivery[]" value="" required />
                                                        <label class="drinkcard-cc acs" for="acs"></label>
                                                        <input id="geniki" type="radio" name="delivery[]" value="" required />
                                                        <label class="drinkcard-cc geniki" for="geniki"></label>
                                                        <input id="metaforikh" type="radio" name="delivery[]" value="" required />
                                                        <label class="drinkcard-cc metaforikh" for="metaforikh"></label>
                                                    </div>
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
                                                        <div class="cc-selector-2 options">
                                                            <input id="stripe" type="checkbox" name="stripecard" value="" data-toggle="collapse" data-target="#show-stripe" aria-expanded="true" aria-controls="show-stripe" required />
                                                            <label class="drinkcard-cc stripe" for="stripe"></label>
                                                            <input id="paypal" type="checkbox" name="paypalcard" value="" data-toggle="collapse" data-target="#show-paypal" aria-expanded="false" aria-controls="show-paypal" required />
                                                            <label class="drinkcard-cc paypal" for="paypal"></label>
                                                            <input id="cash" type="checkbox" name="cashcard" value="" data-toggle="collapse" data-target="#show-cash" aria-expanded="true" aria-controls="show-cash" required />
                                                            <label class="drinkcard-cc cash" for="cash"></label>
                                                        </div>

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
                                            <input type="checkbox" onClick="this.value=''" value="">
                                            I AGREE TO THE <a href="{{ route('shop.privacy.index') }}">TERMS & CONDITIONS</a></div>
                                        <div class="clearfix"></div>
                                        <div class="buy-this">
                                            <a class="price" href="#" onclick="document.getElementById('payment-form').submit()">PAY NOW</a>
                                            {{--<input type="submit" value="Pay" />--}}
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
    {{ Html::script('assets/js/credit-cart/stripe/stripe.js') }}
    <script>
        $(function(){
            var requiredCheckboxes = $('.options :checkbox[required]');
            requiredCheckboxes.change(function(){
                if(requiredCheckboxes.is(':checked')) {
                    requiredCheckboxes.removeAttr('required');
                } else {
                    requiredCheckboxes.attr('required', 'required');
                }
            });
        });
        $('input[type="checkbox"]').on('change', function() {
            $(this).siblings('input[type="checkbox"]').collapse('hide');
            $(this).siblings('input[type="checkbox"]').prop('checked', false);

        });
    </script>
@endsection
