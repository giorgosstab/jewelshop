<div class="col-lg-12 col-md-6 col-sm-12">
    @if ($hotDeals->count() > 1)
        <div class="cat-div  wow fadeIn">
            <h2>HOT DEALS</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="clearfix"> </div><br>
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        @foreach($hotDeals->slice(0, 1) as $product)
                            <div class="row">
                                <div class="col-md-12 col-sm-5">
                                    <a href="{{ route('shop.products.show', $product->slug) }}">
                                        <img alt="" title=""  src="{{ Voyager::image($product->thumbnail('small')) }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-7">
                                    <div class="no-div">
                                        <ul>
                                            <li>
                                                <h5>120</h5>
                                                <span>Days </span> </li>
                                            <li>
                                                <h5>20</h5>
                                                <span>HRS</span> </li>
                                            <li>
                                                <h5>36</h5>
                                                <span>MINS</span> </li>
                                            <li>
                                                <h5>60</h5>
                                                <span>Sec</span> </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="product-name AlsoLike-border">
                                        <a href="{{ route('shop.products.show', $product->slug) }}">
                                            <h3>{{ $product->name }}</h3>
                                        </a>
                                    </div>
                                    <div class="rate-css">
                                        @if($product->presentPriceDeals() != null)
                                            <span>€{{ $product->presentPriceDeals() }}</span>&nbsp;&nbsp
                                            <samp class="text-de">€{{ $product->presentPrice() }}</samp>
                                        @else
                                            <span>€{{ $product->presentPrice() }}</span>
                                        @endif

                                    </div>
                                    <div>
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str2.jpg') }}" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="carousel-item  text-center">
                        @foreach($hotDeals->slice(1, 2) as $product)
                            <div class="row">
                                <div class="col-md-12 col-sm-5">
                                    <a href="{{ route('shop.products.show', $product->slug) }}">
                                        <img alt="" title=""  src="{{ Voyager::image($product->thumbnail('small')) }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-7">
                                    <div class="no-div">
                                        <ul>
                                            <li>
                                                <h5>120</h5>
                                                <span>Days </span> </li>
                                            <li>
                                                <h5>20</h5>
                                                <span>HRS</span> </li>
                                            <li>
                                                <h5>36</h5>
                                                <span>MINS</span> </li>
                                            <li>
                                                <h5>60</h5>
                                                <span>Sec</span> </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="product-name AlsoLike-border">
                                        <a href="{{ route('shop.products.show', $product->slug) }}">
                                            <h3>{{ $product->name }}</h3>
                                        </a>
                                    </div>
                                    <div class="rate-css">
                                        @if($product->presentPriceDeals() != null)
                                            <span>€{{ $product->presentPriceDeals() }}</span>&nbsp;&nbsp;
                                        @endif
                                        <samp class="text-de">€{{ $product->presentPrice() }}</samp>
                                    </div>
                                    <div>
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str2.jpg') }}" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Controls -->
                <a class="left arrow-left" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right arrow-right" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    @elseif($hotDeals->count() > 0)
        <div class="cat-div  wow fadeIn">
            <h2>HOT DEALS</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="clearfix"> </div><br>
                <div class="carousel-inner">
                    <div class="carousel-item active text-center">
                        @foreach($hotDeals as $product)
                            <div class="row">
                                <div class="col-md-12 col-sm-5">
                                    <a href="{{ route('shop.products.show', $product->slug) }}">
                                        <img alt="" title=""  src="{{ Voyager::image($product->thumbnail('small')) }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-12 col-sm-7">
                                    <div class="no-div">
                                        <ul>
                                            <li>
                                                <h5>120</h5>
                                                <span>Days </span> </li>
                                            <li>
                                                <h5>20</h5>
                                                <span>HRS</span> </li>
                                            <li>
                                                <h5>36</h5>
                                                <span>MINS</span> </li>
                                            <li>
                                                <h5>60</h5>
                                                <span>Sec</span> </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="product-name AlsoLike-border">
                                        <a href="{{ route('shop.products.show', $product->slug) }}">
                                            <h3>{{ $product->name }}</h3>
                                        </a>
                                    </div>
                                    <div class="rate-css">
                                        @if($product->presentPriceDeals() != null)
                                            <span>€{{ $product->presentPriceDeals() }}</span>&nbsp;&nbsp
                                            <samp class="text-de">€{{ $product->presentPrice() }}</samp>
                                        @else
                                            <span>€{{ $product->presentPrice() }}</span>
                                        @endif

                                    </div>
                                    <div>
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str2.jpg') }}" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
