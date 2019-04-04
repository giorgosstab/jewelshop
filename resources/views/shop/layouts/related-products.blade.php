@if($mightAlsoLike->count() > 0)
    <div class="cat-div">
        <h2>Related Products</h2>
        <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach($mightAlsoLike->chunk(2) as $chunk)
                    <div class="carousel-item {{ $loop->first ? "active" : "" }}">
                    @foreach($chunk as $product)

                            <a href="{{ route('shop.products.show', $product->slug) }}">
                                <div class="product-scroll">
                                    <div class="row AlsoLike-border">
                                        <div class="col-md-6 col-sm-2 col-xs-6">
                                            @if(Voyager::image($product->thumbnail('small')) && file_exists(Voyager::image($product->thumbnail('small'))))
                                                <img src="{{ Voyager::image($product->thumbnail('small')) }}" class="img-fluid" alt="{{ $product->name }}" title="{{ $product->name }}">
                                            @else
                                                <img src="{{ productImage($product->image) }}" class="img-fluid"alt="{{ $product->name }}" title="{{ $product->name }}" >
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-sm-9 col-xs-6">
                                            <h3>{{ $product->name }}</h3>
                                            <div>
                                                <?php
                                                    $filled_star = round($product->ratings->avg('rating'));
                                                    $empty_star = 5-$filled_star;
                                                ?>
                                                @for($i=0; $i<$filled_star; $i++)
                                                    <img  src="{{ asset('assets/images/str1.jpg') }}" alt="" title="">
                                                @endfor
                                                @if($filled_star / 5 != 0)
                                                    @for($i=0; $i<$empty_star; $i++)
                                                        <img  src="{{ asset('assets/images/str2.jpg') }}" alt="" title="">
                                                    @endfor
                                                @endif
                                            </div>
                                            <h4>€{{ $product->presentPrice() }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="clearfix"></div>

                    @endforeach
                    </div>
                @endforeach
            </div>
            <!-- Controls -->
            <a class="left arrow-left" href="#carousel-example-generic2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right arrow-right" href="#carousel-example-generic2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
@endif

