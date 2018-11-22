<nav class="navbar navbar-expand-sm bg-light navbar-light border fixed-top  navbar-custom navbar-fixed-top p-0 navbar-fixed-top2">
    @include('shop.messages.success')
    @include('shop.messages.warning')
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list">
                        <li><i class="fa fa-phone"></i>&nbsp; (564) 123 4567</li>
                        <li><a href="mailto:mail@example.com"><i class="fa fa-envelope"></i> mail@example.com</a></li>
                    </ul>
                </div>
                <div class="col">
                    <div class="social-media"><a href="#" class="fb-ic mr-3"><i class="fa fa-lg fa-facebook"> </i></a>
                        <!--Twitter-->
                        <a  href="#" class="mr-3"><i class="fa fa-lg fa-twitter"> </i></a>
                        <!--Google +-->
                        <a href="#" class="mr-3"><i class="fa fa-lg fa-google-plus"> </i></a>
                        <!--Linkedin-->
                        <a href="#" class="mr-3"><i class="fa fa-lg fa-linkedin"> </i></a>
                        <!--Instagram-->
                        <a href="#" class="mr-3"><i class="fa fa-lg fa-instagram"> </i></a></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="top-bar1">
        <div class="container">
            <div class="col-md-12">
                <div class="list2">
                    <ul>
                        <li><a href="#" data-toggle="modal" data-target="#myModalHorizontal"><img src="{{ asset('assets/images/padlock.png') }}" alt="" title=""></a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#myModalHorizontal2"><img src="{{ asset('assets/images/user2.png') }}" alt="" title=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="top-bar2">
        <div class="clearfix"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4"><a href="{{ route('shop.home.index') }}"><img src="{{ asset('assets/images/logo-right.png') }}" alt="" title="" /></a></div>
                <div class="col-md-8 col-sm-8">
                    <div class="pull-right">
                        <div class="input-group">
                            <input class="form-control py-2" type="search" value="search">
                            <div class="input-group-append">
                                <button class="btn" type="button"> <i class="fa fa-search"></i> </button>
                            </div>
                            <div class=" dropdown">
                                <div class="cart-btn ">
                                    <a href="#" class="button adc"   id="MenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">€{{ Cart::total() }}
                                        @if(Cart::instance('default')->count() > 0)
                                            <span class="badge badge-warning">{{ Cart::instance('default')->count() }}</span>
                                        @endif
                                    </a>
                                </div>
                                <div class="dropdown-menu dropdown-menu2" aria-labelledby="MenuButton">

                                    @if(Cart::instance('default')->count() > 0)
                                        <h2><span class="shopping-cart count">{{ Cart::instance('default')->count() }} ITEMS IN THE SHOPPING CART </span></h2>
                                    @else
                                        <h2><span class="shopping-cart count">YOUR SHOPPING CART IS EMPTY</span></h2>
                                    @endif

                                    <div class="dropdown-menu2-in">
                                        <ul class="basket scrollbar-ripe-malinka">
                                            @foreach(Cart::content() as $item)
                                                <li>
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <img src="{{ asset('assets/images/small-1.jpg') }}" alt="" title="">
                                                        </div>
                                                        <div class="col-9">
                                                            <p>{{ $item->model->name }}</p>
                                                            <span>€{{ $item->model->presentPrice() }}</span><br>
                                                            <span>Quantity: {{ $item->qty }}</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <a href="{{ route('shop.shopping-cart.index') }}" class="view-ct">View Cart</a>
                                        @if(Cart::instance('default')->count() > 0)
                                            <a href="{{ route('shop.checkout.index') }}" class="check-ct">Checkout</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="container">
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span class="navbar-toggler-icon"></span> </button>
        <div class="clearfix"></div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item"><a  class="nav-link"  href="{{ route('shop.home.index') }}">Home</a></li>
                <li class="nav-item"> <a class="nav-link " href="about-us.html">About</a> </li>
                <li class="nav-item dropdown  mega-dropdown"> <a class="nav-link dropdown-toggle text-uppercase no-caret" id="navbarDropdownMenuLink1" href="{{ route('shop.products.index') }}" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> Shop </a>
                    <div class="dropdown-menu mega-menu v-2 row m-0 z-depth-1 special-color" aria-labelledby="navbarDropdownMenuLink1">
                        <div class="row mx-md-4 mx-1">
                            <div class="col-md-2 col-lg-4 col-xl-4 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">
                                <h6 class="sub-title text-uppercase font-weight-bold white-text">Related</h6>
                                <!--Featured image-->
                                <div class="view overlay mb-3 z-depth-1"> <img src="{{ asset('assets/images/menu-img.jpg') }}" class="img-fluid" alt="First sample image">
                                    <div class="mask rgba-white-slight flex-center">
                                        <p></p>
                                    </div>
                                </div>
                                <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">THE SAADIA DROP EARRINGS</a></h4>
                                <p class="font-small text-uppercase white-text"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 / <i class="fa fa-comments-o px-1" aria-hidden="true"></i> 20</p>
                            </div>
                            <div class="col-md-10 col-lg-8 col-xl-8">
                                <div class="row">
                                    @foreach($allSubCategories as $subCate)
                                        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">
                                            <a class="menu-item" href="#"><h6 class="sub-title text-uppercase font-weight-bold white-text">{{ $subCate->name }}</h6></a>
                                            <ul class="caret-style pl-0">
                                                @foreach($subCate->subCategory as $firstNestedSub)
                                                    <li class=""><a class="menu-item" href="#">{{ $firstNestedSub->name }}</a></li>
                                                    @foreach($firstNestedSub->subCategory as $secondNestedSub)
                                                        SecondNested : {{ $secondNestedSub->name }}<br>
                                                        @foreach($secondNestedSub->subCategory as $thirdNestedSub)
                                                            $thirdNested: {{ $thirdNestedSub->name }}
                                                        @endforeach()
                                                    @endforeach()
                                                @endforeach()
                                            </ul>
                                        </div>
                                    @endforeach()

                                    {{--<div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">--}}
                                        {{--<a class="menu-item" href="#"><h6 class="sub-title text-uppercase font-weight-bold white-text">GOLD JEWELLERY</h6></a>--}}
                                        {{--<ul class="caret-style pl-0">--}}
                                            {{--<li class=""><a class="menu-item" href="#">Rings</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Earrings</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Pendants</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Bangles</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Bracelets</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">--}}
                                        {{--<h6 class="sub-title text-uppercase font-weight-bold white-text">Latest Jewellery</h6>--}}
                                        {{--<ul class="caret-style pl-0">--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product-2.html">product 2</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product 3</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product 4</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product 5</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">--}}
                                        {{--<h6 class="sub-title text-uppercase font-weight-bold white-text">NECKLACES</h6>--}}
                                        {{--<ul class="caret-style pl-0">--}}
                                            {{--<li class=""><a class="menu-item" href="#">Necklaces</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Mangalsutras</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Nose Pins</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Necklaces</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Mangalsutras</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Nose Pins</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">--}}
                                        {{--<h6 class="sub-title text-uppercase font-weight-bold white-text">Latest Jewellery</h6>--}}
                                        {{--<ul class="caret-style pl-0">--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product-2.html">product 2</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product 3</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product 4</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="product.html">Product 5</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">--}}
                                        {{--<h6 class="sub-title text-uppercase font-weight-bold white-text">GOLD JEWELLERY</h6>--}}
                                        {{--<ul class="caret-style pl-0">--}}
                                            {{--<li class=""><a class="menu-item" href="#">Rings</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Earrings</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Pendants</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Bangles</a></li>--}}
                                            {{--<li class=""><a class="menu-item" href="#">Bracelets</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#">Blog</a> </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"  href="404.html">404</a>
                        <a class="dropdown-item"  href="faq.html">FAQ</a>
                        <a class="dropdown-item" href="privacy.html">Privacy</a>
                        <a class="dropdown-item" href="coming-soon.html">Coming soon</a>
                        <a class="dropdown-item" href="terms-and-conditions.html">Terms &amp; Condition</a>
                    </div>
                </li>
                <li class="nav-item"><a  class="nav-link"  href="contact-us.html">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
