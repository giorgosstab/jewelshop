<nav class="navbar navbar-expand-sm bg-light navbar-light border fixed-top  navbar-custom navbar-fixed-top p-0 navbar-fixed-top2">
    @include('shop.messages.success')
    @include('shop.messages.success_reset')
    @include('shop.messages.warning')
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="list">
                        <li><a href="tel:{{ setting('site.phone') }}"><i class="fa fa-phone"></i>&nbsp; {{ setting('site.phone_view') }}</a></li>
                        <li><a href="mailto:{{ setting('site.email') }}"><i class="fa fa-envelope"></i> {{ setting('site.email') }}</a></li>
                    </ul>
                </div>
                <div class="col">
                    {{ menu('social_media', 'shop.partials.menus.social') }}
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
                        @guest
                            <li><a href="{{ route('login') }}"><img src="{{ secure_asset('assets/images/padlock.png') }}" alt="" title="Login"></a></li>
                            <li><a href="{{ route('register') }}"><img src="{{ secure_asset('assets/images/user2.png') }}" alt="" title="Register"></a></li>
                        @else
                            <li><a href="#"><img src="{{ secure_asset('assets/images/profile.png') }}" alt="" title=""></a></li>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><img src="{{ secure_asset('assets/images/logout.png') }}" alt="" title=""></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
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
                                    <a href="#" class="button adc"   id="MenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">€{{ presentPrice(Cart::total()) }}
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
                                                        <div class="col-4">
                                                            @if(Voyager::image($item->model->thumbnail('small')) && file_exists(Voyager::image($item->model->thumbnail('small'))))
                                                                <img src="{{ Voyager::image($item->model->thumbnail('small')) }}" class="img-fluid" alt="{{ $item->model->name }}" title="{{ $item->model->name }}" width="75">
                                                            @else
                                                                <img src="{{ productImage($item->model->image) }}" class="img-fluid"alt="{{ $item->model->name }}" title="{{ $item->model->name }}" width="75">
                                                            @endif
                                                        </div>
                                                        <div class="col-8">
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
