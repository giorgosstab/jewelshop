<div class="cat-div">
    <h2>Related Products</h2>
    <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                @foreach($mightAlsoLike->slice(0, 2) as $product)
                    <a href="{{ route('shop.products.show', $product->slug) }}">
                        <div class="product-scroll">
                            <div class="row AlsoLike-border">
                                <div class="col-md-6 col-sm-2 col-4">
                                    <img  src="{{ Voyager::image($product->thumbnail('small')) }}" alt="" title="" class="img-fluid">
                                </div>
                                <div class="col-md-6 col-sm-9 col-8">
                                    <h3>{{ $product->name }}</h3>
                                    <div>
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str2.jpg') }}" alt="" title="">
                                    </div>
                                    <h4>€{{ $product->presentPrice() }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <div class="carousel-item">
                @foreach($mightAlsoLike->slice(2, 4) as $product)
                    <a href="{{ route('shop.products.show', $product->slug) }}">
                        <div class="product-scroll">
                            <div class="row AlsoLike-border">
                                <div class="col-md-6 col-sm-2 col-4">
                                    <img  src="{{ Voyager::image($product->thumbnail('small')) }}" alt="" title="" class="img-fluid">
                                </div>
                                <div class="col-md-6 col-sm-9 col-8">
                                    <h3>{{ $product->name }}</h3>
                                    <div>
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                        <img  src="{{ asset('assets/images/str2.jpg') }}" alt="" title="">
                                    </div>
                                    <h4>€{{ $product->presentPrice() }}</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left arrow-left" href="#carousel-example-generic3" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right arrow-right" href="#carousel-example-generic3" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
