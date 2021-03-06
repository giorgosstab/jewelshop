@extends('shop.main')

@section('title', theme('home_title'))

@section('extra-css')
    <!--owlcarousel-Best Of Our Store and Popular Brands-->
    {{ Html::style('assets/css/owl.theme.default.min.css') }}
    {{ Html::style('assets/js/carousel/owlcarousel/assets/owl.carousel.min.css') }}
    {{ Html::style('assets/js/carousel/owlcarousel/assets/owl.theme.default.min.css') }}

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    {{ Html::style('assets/slider/css/settings.css') }}
    <style>
        .product-bg {
            padding:73px 15px 60px 15px;
            background: url("{{ settingsAdminImageExist(theme('home_parallax'),"homepage") }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="100" data-delay="5000" >
                    <!-- MAIN IMAGE -->
                    <img src="{{ theme('home_slider1') ? Voyager::image(theme('home_slider1')) : secure_asset('assets/images/dummyThemes/home-slider1.jpg') }}"  alt="slidebg1" data-bgfit="cover" data-bgposition="left center" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption huge_red skewfromleft customout"
                         data-x="center"
                         data-y="260"

                         data-splitin="chars"
                         data-elementdelay="0.05"
                         data-start="700"
                         data-speed="600"
                         data-easing="Back.easeOut"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-endelementdelay="0"

                         data-end="90000"
                         data-endspeed="1500"
                         data-endeasing="Power3.easeInOut"
                         data-captionhidden="on"
                         style="z-index:5"
                    >{{ theme('home_slider1_header_big') }} </div>
                    <div class="tp-caption middle_yellow customin customout"
                         data-x="center"
                         data-y="180"
                         data-splitin="chars"
                         data-elementdelay="0.1"
                         data-start="500"
                         data-speed="300"
                         data-easing="Power3.easeOut"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                         data-splitout="lines"
                         data-endelementdelay="0"

                         data-end="90000"
                         data-endspeed="1500"
                         data-endeasing="Power3.easeInOut"
                         data-captionhidden="on"
                    >{{ theme('home_slider1_header_small') }}</div>
                </li>
                <!-- SLIDE -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-delay="5000">
                    <!-- MAIN IMAGE -->
                    <img src="{{ theme('home_slider2') ? Voyager::image(theme('home_slider2')) : secure_asset('assets/images/dummyThemes/home-slider2.jpg') }}"  alt="slidebg1" data-bgfit="cover" data-bgposition="left center" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption huge_red skewfromrightshort customout"
                         data-x="center"
                         data-y="260"

                         data-splitin="chars"
                         data-elementdelay="0.05"
                         data-start="700"
                         data-speed="600"
                         data-easing="Back.easeOut"

                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"


                         data-splitout=""
                         data-endelementdelay="0"
                         data-end="90000"
                         data-endspeed="1500"
                         data-endeasing="Power3.easeInOut"
                         data-captionhidden="on"
                         style="z-index:5"
                    >{{ theme('home_slider2_header_big') }}</div>
                    <div class="tp-caption middle_yellow customin customout"
                         data-x="center"
                         data-y="180"
                         data-splitin="chars"
                         data-elementdelay="0.1"
                         data-start="500"
                         data-speed="300"
                         data-easing="Power3.easeOut"
                         data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0.4;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 20%;"


                         data-splitout="lines"
                         data-endelementdelay="0"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:640;scaleX:10;scaleY:10;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-end="90000"
                         data-endspeed="1500"
                         data-endeasing="Power3.easeInOut"
                         data-captionhidden="on"
                    >{{ theme('home_slider2_header_small') }}</div>
                </li>
                <!-- SLIDE -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-delay="5000" >
                    <!-- MAIN IMAGE -->
                    <img src="{{ theme('home_slider3') ? Voyager::image(theme('home_slider3')) : secure_asset('assets/images/dummyThemes/home-slider3.jpg') }}"  alt="slidebg1" data-bgfit="cover" data-bgposition="left center" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <div class="tp-caption huge_red skewfromrightshort customout"
                         data-x="center"
                         data-y="260"
                         data-splitin="chars"
                         data-elementdelay="0.05"
                         data-start="700"
                         data-speed="600"
                         data-easing="Back.easeOut"
                         data-customin="x:-40;y:-30;z:0;rotationX:0;rotationY:0;rotationZ:-70;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"


                         data-splitout=""
                         data-endelementdelay="0"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:190;rotationZ:0;scaleX:10;scaleY:10;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-end="90000"
                         data-endspeed="1500"
                         data-endeasing="Power3.easeInOut"
                         data-captionhidden="on"
                         style="z-index:5"
                    >{{ theme('home_slider3_header_big') }}</div>
                    <div class="tp-caption middle_yellow randomrotate customout tp-resizeme"
                         data-x="center"
                         data-y="180"
                         data-splitin="chars"
                         data-elementdelay="0.1"
                         data-start="500"
                         data-speed="300"
                         data-easing="Power3.easeOut"
                         data-customin="x:0;y:30;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:0.4;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 20%;"


                         data-splitout="lines"
                         data-endelementdelay="0"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:640;scaleX:10;scaleY:10;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-end="90000"
                         data-endspeed="1500"
                         data-endeasing="Power3.easeInOut"
                         data-captionhidden="on"
                    >{{ theme('home_slider3_header_small') }}</div>
                </li>
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!-- Content End -->
    <div id="wrapper">
        <!-- Popular Collections-->
        <section  class="content-section specific-module">
            <div class="div-center">
                <div class="specific-content">
                    <h2 class="title-h wow fadeInDown"><span>Popular</span> Collections</h2>
                </div>
                <div class="row">
                    @foreach($popularProducts as $product)
                        <div class="col-md-3 col-sm-3 col-xs-6 text-center wow fadeIn">
                            <div class="box-css">
                                <a href="{{ route('shop.products.show', $product->slug) }}">
                                    @if(Voyager::image($product->thumbnail('medium')) && file_exists(Voyager::image($product->thumbnail('medium'))))
                                        <img src="{{ Voyager::image($product->thumbnail('medium')) }}" class="img-fluid" alt="{{ $product->name }}" title="{{ $product->name }}" >
                                    @else
                                        <img src="{{ productImage($product->image) }}" class="img-fluid" alt="{{ $product->name }}" title="{{ $product->name }}" >
                                    @endif
                                    <div class="opacitybox white">
                                        <div class="boxcontent">
                                            <h4 class="white">{{ $product->name }}</h4>
                                            <img src="assets/images/search.svg" width="35" alt="" title="" ></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="clearfix"></div>
                <div class="View-all  wow fadeInDown">
                    <a href="{{ route('shop.products.index') }}">View all Collections <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!-- Jewelleries for every Occasion-->
        <section class="content-section text-center product-bg">
            <div class="col-md-8 col-center">
                <div class="title-heading  wow fadeInUp">
                    <h3>Jewelleries for every Occasion</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="img-div3">
                <div class="row">
                    <div class="col-md-6 col-sm-6 wow fadeInLeft">
                        <a href="{{ route('shop.products.index') }}" class="right-img">
                            <div>
                                <img src="{{ theme('home_parallax_image1') ? Voyager::image(theme('home_parallax_image1')) : secure_asset('assets/images/dummyThemes/parallax_left.jpg') }}" class="img-fluid grayscale" alt="" title="">
                            </div>
                        </a>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInRight">
                        <a href="{{ route('shop.products.index') }}" class="right-img">
                            <div>
                                <img src="{{ theme('home_parallax_image2') ? Voyager::image(theme('home_parallax_image2')) : secure_asset('assets/images/dummyThemes/parallax_right.jpg') }}" class="img-fluid grayscale" alt="" title="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--best of our store-->
        <section class="content-section">
            <div class="best-div">
                <div class="best-of-our-store">
                    <h2 class="wow fadeInUp"><span>Best</span> of our store</h2>
                    <div class="owl-carousel owl-theme wow fadeIn owl-loaded">
                        @foreach($bestProducts as $bestof)
                            <div class="item img-title">
                                <div class="owl-item-boder">
                                    <div class="hover-div">
                                        <div class="our-store">
                                            <a href="{{ route('shop.products.show', $bestof->slug) }}"><img src="assets/images/search.svg" width="35" alt="" title="" ></a>
                                        </div>
                                        @if(Voyager::image($bestof->thumbnail('medium')) && file_exists(Voyager::image($bestof->thumbnail('medium'))))
                                            <img src="{{ Voyager::image($bestof->thumbnail('medium')) }}" class="img-fluid" alt="{{ $product->name }}" title="{{ $product->name }}" >
                                        @else
                                            <img src="{{ productImage($bestof->image) }}" class="img-fluid" alt="{{ $bestof->name }}" title="{{ $bestof->name }}" >
                                        @endif
                                        <div class="round-circles">Sale</div>
                                    </div>
                                </div>
                                <h4>{{ $bestof->name }}</h4>
                                <p class="price">
                                    @if($bestof->presentPriceDeals() != null)
                                        <span>€{{ $bestof->presentPriceDeals() }}</span>&nbsp;&nbsp <samp>€{{ $bestof->presentPrice() }}</samp>
                                    @else
                                        <span>€{{ $bestof->presentPrice() }}</span>
                                    @endif
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--shop by category-->
        <section  class="content-section category">
            <div class="category-in">
                <h2 class="text-center wow fadeInUp"><span>Shop</span> By Category</h2>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <!-- Carousel items -->
                        <div class="carousel-inner">
                            @foreach($categories->chunk(5) as $chunk)
                                <div class="carousel-item {{ $loop->first ? "active" : "" }}">
                                    <ul>
                                        @foreach($chunk->slice(0, 2) as $category)
                                            <li>
                                                <div class="grid">
                                                    <figure class="effect-moses">
                                                        <div class="zoom-hover">
                                                            <a href="{{ route('shop.products.index', ['cat' => $category->slug]) }}">
                                                                <span class="glyphicon glyphicon-search"></span>
                                                            </a>
                                                        </div>
                                                        <img src="{{ categoryImage($category->image) }}" alt="{{ $category->name }}" title="{{ $category->name }}" class="img-fluid">
                                                    </figure>
                                                </div>
                                                <h2>{{ $category->name }}</h2>
                                            </li>
                                        @endforeach
                                        @foreach($chunk->slice(2, 5) as $category)
                                            <li class="div-n">
                                                <div class="grid">
                                                    <figure class="effect-moses">
                                                        <div class="zoom-hover">
                                                            <a href="{{ route('shop.products.index', ['cat' => $category->slug]) }}">
                                                                <span class="glyphicon glyphicon-search"></span>
                                                            </a>
                                                        </div>
                                                        <img src="{{ categoryImage($category->image) }}" alt="{{ $category->name }}" title="{{ $category->name }}" class="img-fluid">
                                                    </figure>
                                                </div>
                                                <h2>{{ $category->name }}</h2>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                <!--/carousel-inner-->
                    <a  class="left carousel-control" href="#carouselExampleControls" role="button" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>
                    <a class="right carousel-control" href="#carouselExampleControls" role="button" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <!--latest jewellery collection-->
        <section class="bg-2 content-section ">
            <h2 class="text-center  wow fadeInDown"><span>Latest</span> Jewellery Collection</h2>
            <div class="clearfix"></div>
            <div class="section">
                <link rel="stylesheet" type="text/css" href="assets/css/set2.css" />
                <div id="masonry-7" class="masonry one_column full-width">
                    <div class="content img-div">
                        <ul>
                            @foreach($latestProducts as $product)
                                <li class="wow fadeIn">
                                    <div class="grid">
                                        <figure class="effect-apollo">
                                            @if(Voyager::image($product->thumbnail('medium')) && file_exists(Voyager::image($product->thumbnail('medium'))))
                                                <img src="{{ Voyager::image($product->thumbnail('medium')) }}" class="img-fluid" alt="{{ $product->name }}" title="{{ $product->name }}" >
                                            @else
                                                <img src="{{ productImage($product->image) }}" class="img-fluid"alt="{{ $product->name }}" title="{{ $product->name }}" >
                                            @endif
                                            <figcaption>
                                                <h2><span style="word-spacing: 3px;">{{ $product->name }}</span></h2>
                                                <p>SKU: {{ $product->sku }}</p>
                                                <a href="{{ route('shop.products.show', $product->slug) }}">View more</a> </figcaption>
                                        </figure>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Popular Brands-->
        <section>
            <div class="popular-brands footer-logos content-section">
                <h2 class="wow fadeInDown"><span>Popular</span> Brands</h2>
                <div id="owl-demo" class="owl-carousel owl-carousel-2 wow fadeInDown">
                    @foreach($popularBrands as $brand)
                        <div class="item">
                            <a href="{{ route('shop.products.index', appendUrlParams(['brands' => $brand->slug])) }}">
                                <img src="{{ brandImage($brand->image) }}" alt="{{ $brand->name }}" title="{{ $brand->name }}"/>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
