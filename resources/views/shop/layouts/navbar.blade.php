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
            {{ menu('main', 'shop.partials.menus.main') }}
        </div>
    </div>
</nav>
