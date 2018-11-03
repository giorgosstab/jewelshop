@extends('shop.main')

@section('title', '| ' . $product->name)

@section('extra-css')
    {{ Html::style('assets/css/xzoom.css') }}
    {{ Html::script('assets/js/jquery2.js') }}
    {{ Html::script('assets/js/xzoom.min.js') }}
    {{ Html::script('assets/js/setup.js') }}
@endsection

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg">
                <div class="inner-head wow fadeInDown">
                    <h3>Product Detail</h3>
                </div>
            </div>
        </section>
        <!--page heading-->
        <!--container-->
        <div class="container">
            <div class="shop-in">
                <div class="row">
                    <div class="col-md-12">
                        <!--breadcrumbs -->
                        <div class="bread2">
                            <ul>
                                <li><a href="{{ route('shop.home.main') }}">HOME</a></li>
                                <li>/</li>
                                <li><a href="{{ route('shop.products.main') }}">SHOP</a></li>
                                <li>/</li>
                                <li>{{ $product->name }}</li>
                            </ul>
                        </div>
                        <!--breadcrumbs -->
                    </div>
                </div>
                <div class="clearfix"> </div>
                <!--Left side big devices -->
                <div class="row">
                    <!--Left side -->
                    <div class="col-lg-3 col-md-12 col-sm-12 div-none2 wow fadeInLeft">
                        <div class="cat-div">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4"><img  src="{{ asset('assets/images/delivery-truck.svg') }}" width="46" alt="" title=""></div>
                                <div class="col-md-8 col-sm-8 col-xs-4 icon-div">
                                    <h4>Free Delivery</h4>
                                    <p>from $50 </p>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-4 col-sm-4 col-xs-4"><img  src="{{ asset('assets/images/supermarket.svg') }}" width="46"  alt="" title=""></div>
                                <div class="col-md-8 col-sm-8 col-xs-8 icon-div">
                                    <h4>99 % Customer</h4>
                                    <p>from $50 </p>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="col-md-4 col-sm-4 col-xs-4"><img  src="{{ asset('assets/images/reuse.svg') }}" width="46"  alt=""  title=""></div>
                                <div class="col-md-8 col-sm-8 col-xs-8 icon-div">
                                    <h4>6 Days</h4>
                                    <p>from $50 </p>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="clearfix"></div>
                                <div class="col-md-4 col-sm-4 col-xs-4"><img  src="{{ asset('assets/images/checked.svg') }}" width="46"  alt="" title=""></div>
                                <div class="col-md-8 col-sm-8 col-xs-8 icon-div">
                                    <h4>Payment</h4>
                                    <p>from $50 </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>

                       @include('shop.layouts.related-products')

                    </div>
                    <!--right side -->
                    <div class="col-lg-9 col-md-12 col-sm-12 div-left wow fadeInRight">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-12 text-center">
                                <div class="large-5 column">
                                    <div class="xzoom-container">
                                        <img class="xzoom" id="xzoom-default" src="{{ asset('assets/images/zoom-img/img-1.jpg') }}" xoriginal="{{ asset('assets/images/zoom-img/img-1.jpg') }}" />
                                        <div class="xzoom-thumbs">
                                            <a href="{{ asset('assets/images/zoom-img/big-1.jpg') }}">
                                                <img class="xzoom-gallery" width="80" src="{{ asset('assets/images/zoom-img/img-1.jpg') }}"  xpreview="{{ asset('assets/images/zoom-img/img-1.jpg') }}" title="">
                                            </a>
                                            <a href="{{ asset('assets/images/zoom-img/big-2.jpg') }}">
                                                <img class="xzoom-gallery" width="80" src="{{ asset('assets/images/zoom-img/img-2.jpg') }}"  xpreview="{{ asset('assets/images/zoom-img/img-2.jpg') }}" title="">
                                            </a>
                                            <a href="{{ asset('assets/images/zoom-img/big-4.jpg') }}">
                                                <img class="xzoom-gallery" width="80" src="{{ asset('assets/images/zoom-img/img-4.jpg') }}"  xpreview="{{ asset('assets/images/zoom-img/img-4.jpg') }}" title="">
                                            </a>
                                            <a href="{{ asset('assets/images/zoom-img/big-5.jpg') }}">
                                                <img class="xzoom-gallery" width="80" src="{{ asset('assets/images/zoom-img/img-5.jpg') }}"  xpreview="{{ asset('assets/images/zoom-img/img-5.jpg') }}" title="">
                                            </a>
                                            <a href="{{ asset('assets/images/zoom-img/big-6.jpg') }}">
                                                <img class="xzoom-gallery" width="80" src="{{ asset('assets/images/zoom-img/img-6.jpg') }}"  xpreview="{{ asset('assets/images/zoom-img/img-6.jpg') }}" title="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="list-div border-0">
                                    <h2 class="mt-2 mb-2">Specification</h2>
                                    <div class="clearfix"></div>
                                    <ul>
                                        <li>
                                            <div class="row 0">
                                                <div class="col-md-2 col-sm-2 col-2 pt-0"> <img src="{{ asset('assets/images/products/icon1.jpg') }}" alt="" title=""> </div>
                                                <div class="col-md-10 col-sm-10 col-10"> Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row 0">
                                                <div class="col-md-2 col-sm-2 col-2 pt-0"> <img src="{{ asset('assets/images/products/icon2.jpg') }}" alt="" title=""> </div>
                                                <div class="col-md-10 col-sm-10 col-10"> Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row 0">
                                                <div class="col-md-2 col-sm-2 col-2 pt-0"> <img src="{{ asset('assets/images/products/icon3.jpg') }}" alt="" title=""> </div>
                                                <div class="col-md-10 col-sm-10 col-10"> Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row 0">
                                                <div class="col-md-2 col-sm-2 col-2 pt-0"> <img src="{{ asset('assets/images/products/icon4.jpg') }}" alt="" title=""> </div>
                                                <div class="col-md-10 col-sm-10 col-10"> Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row 0">
                                                <div class="col-md-2 col-sm-2 col-2 pt-0"> <img src="{{ asset('assets/images/products/icon-5.jpg') }}" alt="" title=""> </div>
                                                <div class="col-md-10 col-sm-10 col-10"> Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row 0">
                                                <div class="col-md-2 col-sm-2 col-2 pt-0"> <img src="{{ asset('assets/images/products/icon-6.jpg') }}" alt="" title=""> </div>
                                                <div class="col-md-10 col-sm-10 col-10"> Neque porro quisquam est qui dolorem ipsum quia
                                                    dolor sit amet, consectetur, adipisci velit.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row 0">
                                                <div class="col-md-2 col-sm-2 col-2 pt-0"> <img src="{{ asset('assets/images/products/icon-7.jpg') }}" alt="" title=""> </div>
                                                <div class="col-md-10 col-sm-10 col-10" style="margin-top:1em;">
                                                    <span style="color:#dfb859;"><b>{{ $product->sku }}</b></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">&nbsp;</div>
                        <div class="price-2">
                            <ul>
                                <li class="tab1">PRICE: <span>€{{ $product->presentPrice() }}</span></li>
                                <li><a href="cart.html">ADD TO CART </a></li>
                            </ul>
                        </div>
                        <div class="share-icon"> <i class="fa fa-share-alt" aria-hidden="true"></i><br>
                            SHARE </div>
                        <div class="socialmedia">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                                <li><a href="#"><i class="fa fa fa-timblr" aria-hidden="true"> <strong class="tcss">t</strong> </i></a></li>
                            </ul>
                        </div>
                        <div class="read-full">
                            <ul>
                                <li><a data-toggle="collapse" data-target="#demo"> <span>Read full specs</span> </a></li>
                                <li><a data-toggle="collapse" data-target="#demo"><img  src="{{ asset('assets/images/products/arrow.jpg') }}" alt="" title=""></a> </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <div id="demo" class="collapse">
                            <div class="inner-div">
                                <div class="row m-0">
                                    <div class="col-md-12 product-info">
                                        <h2 class="mt-2">Product Information</h2>
                                        <h6><span style="color:#dfb859">SKU - {{ $product->sku }}</span></h6>
                                        <p>{{ $product->description }}</p>
                                        <p><img  src="{{ asset('') }}assets/images/products/line.jpg"  alt="" title=""></p>
                                        <h2>Notes</h2>
                                        <p>Please Note: This item is HAND MADE TO ORDER and will be
                                            dispatched in 2-3 weeks.</p>
                                        <p><img  src="{{ asset('assets/images/products/line.jpg') }}"  alt="" title=""></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Left side small devices-->
                <div class="row">
                    <div class="div-none">
                        <div class="row">
                            <div class="col col-lg-6 wow fadeIn">
                                <div class="cat-div">
                                    <div class="row m-0">
                                        <div class="col-md-4 col-sm-2 col-xs-2"><img  src="{{ asset('assets/images/delivery-truck.svg') }}" width="46" alt="" title=""></div>
                                        <div class="col-md-8 col-sm-10 col-xs-10 icon-div p-0">
                                            <h4>Free Delivery</h4>
                                            <p>from $50 </p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="row m-0">
                                        <div class="col-md-4 col-sm-2 col-xs-2"><img  src="{{ asset('assets/images/supermarket.svg') }}" width="46"  alt="" title=""></div>
                                        <div class="col-md-8 col-sm-10 col-xs-10 icon-div p-0">
                                            <h4>99 % Customer</h4>
                                            <p>from $50 </p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="row m-0">
                                        <div class="col-md-4 col-sm-2 col-xs-2"><img  src="{{ asset('assets/images/checked.svg') }}" width="46"  alt="" title=""></div>
                                        <div class="col-md-8 col-sm-10 col-xs-10 icon-div p-0">
                                            <h4>6 Days</h4>
                                            <p>from $50 </p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <hr>
                                    <div class="clearfix"></div>
                                    <div class="row m-0">
                                        <div class="col-md-4 col-sm-2 col-xs-2"><img  src="{{ asset('assets/images/reuse.svg') }}" width="46"  alt=""  title=""></div>
                                        <div class="col-md-8 col-sm-10 col-xs-10 icon-div p-0">
                                            <h4>Payment</h4>
                                            <p>from $50 </p>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xl-12 wow fadeIn">
                                @include('shop.layouts.related-products-min')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--container-->
        <div class="clearfix"></div>
    </div>
@endsection
