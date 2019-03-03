@extends('shop.main')

@section('title', '| Shop')

@section('extra-css')
    <style>
        .inner-bg1 {
            background: url("{{ settingsAdminImageExist(setting('site.shop_parallax'),"shop") }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding:150px 0
        }
</style>
@endsection

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg1">
                <div class="inner-head wow fadeInDown">
                    <h3>Shop</h3>
                </div>
            </div>
        </section>
        <!--container-->
        <div class="container">
            <div class="shop-in">
                <!--breadcrumbs -->
                <div class="col-md-12">
                    <div class="bread2">
                        <ul>
                            <li><a href="{{ route('shop.home.index') }}">HOME</a></li>
                            <li>/</li>
                            @if($mainCategoryName)
                                <li><a href="{{ route('shop.products.index') }}">SHOP</a></li>
                                <li>/</li>
                                <li>{{ $mainCategoryName }}</li>
                            @else
                                <li>SHOP</li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <div class="row">
                    <!--left-side-->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <button data-toggle="collapse" data-target="#div-open" class="menu-icon"></button>
                        <div class="clearfix"></div>
                        <div id="div-open" class="collapse  wow fadeIn">
                            <div class="row">
                                @if($products->count() > 0)
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="cat-div  wow fadeIn">
                                            <h2>Category</h2>
                                            <div class="Category">
                                                <div id="accordion">
                                                    <div class="card-header"> <a class="card-link" data-toggle="collapse" href="#collapseOne"> PRODUCT TYPE </a> </div>
                                                    <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <ul class="m-0 p-0">
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Bangle <span>(14)</span> </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Bead <span>(28)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Bracelet <span>(91)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Charm <span>(122)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Coin <span>(1)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Cufflinks <span>(7) </span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Earrings <span>(276) </span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Jewellery <span>Set (4) </span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Locket <span>(1)</span> </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Necklace <span>(62)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Pendant <span>(234)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Ring <span>(455)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Ring Set <span>(1)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Watch <span>(1)</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">COLLECTIONS </a> </div>
                                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <ul class="m-0 p-0">
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Amber <span>(1)</span> </label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Garnet <span>(5)</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree"> BRAND <span>(3)</span> </a> </div>
                                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <ul class="m-0 p-0">
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Pre-Owned <span>(8)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        TJH Collection <span>(10)</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapse1">MATERIAL</a> </div>
                                                    <div id="collapse1" class="collapse" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <ul class="m-0 p-0">
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Sterling Silver <span>(1)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        14ct Yellow Gold <span>(10)</span></label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        9ct Yellow Gold <span>(12)</span></label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#collapse4">STONE TYPE</a> </div>
                                                    <div id="collapse4" class="collapse" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <ul class="m-0 p-0">
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Amber (1)</label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        Garnet (1)</label>
                                                                </li>
                                                                <li>
                                                                    <label>
                                                                        <input type="checkbox"   name="option2" value="something">
                                                                        No Stone</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                        <div class="cat-div  wow fadeIn">
                                            <h2>FILTER BY PRICE</h2>
                                            <label for="amount" class="mt-3 mb-3">Price range:</label>
                                            <div class="inputPrices">
                                                <div id="slider-range"></div>
                                                {{--<p class="mt-3 mb-2 text-center">--}}
                                                {{--<input type="text" id="amount" readonly style="border:0; color:#f18a1a; font-weight:bold; text-align:center">--}}
                                                {{--</p>--}}
                                                <p class="mt-3 mb-2">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="number" id="min" min="{{ request()->filter == "range" ? request()->min / 100 : floor($minPrice / 100) }}" max="{{ request()->filter == "range" ? request()->max / 100 : floor($maxPrice / 100) }}" class="form-control pull-left">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" id="max" min="{{ request()->filter == "range" ? request()->min / 100 : floor($minPrice / 100) }}" max="{{ request()->filter == "range" ? request()->max / 100 : floor($maxPrice / 100) }}" class="form-control pull-right">
                                                    </div>
                                                </div>

                                                </p>
                                                <div class="pull-right">
                                                    <input type="button" class="filter2" value="FILTER">
                                                </div>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                @endif

                                @include('shop.layouts.hotdeals-shop')

                                @include('shop.layouts.specialoffers-shop')

                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="cat-div  wow fadeIn">
                                        <h2>Download our app</h2>
                                        <div class="download-our"> <a href="#" class="pull-left"><img  src="assets/images/app.png" alt="" title="" class="img-fluid"></a> <a href="#" class="pull-left"><img  src="assets/images/google-play.png" alt="" title="" class="img-fluid"></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--right-side-->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row">
                            @if($products->count() > 0)
                                <div class="col-md-6 col-sm-6 col-xs-6 select-p">
                                    <select id="sorting" class="selectpicker select-1" data-style="btn-primary">
                                        <option {{ request()->sort == "new" ? 'selected' : '' }} value="newest">Date Added: Latest First</option>
                                        <option {{ request()->sort == "low_high" ? 'selected' : '' }} value="lower_price">Price: Lower to Higher</option>
                                        <option {{ request()->sort == "high_low" ? 'selected' : '' }} value="higher_price">Price: Higher to Lower</option>
                                        <option {{ request()->sort == "a_z" ? 'selected' : '' }} value="AtoZ">Product Name: A to Z</option>
                                        <option {{ request()->sort == "z_a" ? 'selected' : '' }} value="ZtoA">Product Name: Z to A</option>
                                    </select>
                                </div>
                            @endif
                            @if($products->count() > 0)
                                <div class="col-md-6 col-sm-6 col-xs-6 bread">
                                    <div class="breadcrumbs">
                                        <!-- fix position if dont have pagination links -->
                                        @if($productsPagination <= 20)
                                            <br><br><br>
                                        @else
                                            {{ $products->appends(request()->input())->render('pagination::shopPagination') }}
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 select-p">
                                    <div class="pagination">
                                        <h5>Showing <span>{{ $products->firstItem() }}</span> - <span>{{ $products->lastItem() }}</span> of <span>{{ $products->total() }}</span> items for
                                            @if($products->currentPage() == 1)
                                                <span>{{ $products->currentPage() }}st</span>
                                            @elseif($products->currentPage() == 2)
                                                <span>{{ $products->currentPage() }}nd</span>
                                            @elseif($products->currentPage() == 3)
                                                <span>{{ $products->currentPage() }}rd</span>
                                            @else
                                                <span>{{ $products->currentPage() }}th</span>
                                            @endif
                                            page.
                                        </h5>
                                    </div>
                                </div><hr>
                            @endif
                        </div>
                        <hr>

                        <div class="clearfix"></div>
                        <div class="row">
                            @forelse($products as $product)
                                <div id="updatedProducts" class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg wow fadeIn">
                                    <div class="col-lg-12 padd0">
                                        <div class="product-hover">
                                            <div>
                                                {!! Form::open(array('route'=>'shop.shopping-cart.store','method' => 'POST','id' => 'addToCart'.$product->id)) !!}
                                                    {{ csrf_field() }}
                                                    {{ Form::hidden('id', $product->id) }}
                                                    {{ Form::hidden('name', $product->name) }}
                                                    {{ Form::hidden('price', $product->price) }}
                                                    <a href="{{ route('shop.products.show', $product->slug) }}">
                                                        <img  src="{{ asset('assets/images/magnifier.svg') }}"  width="20" height="20" alt="" title="">
                                                    </a> &nbsp;&nbsp;
                                                    <a href="#" onclick="document.getElementById('addToCart{{ $product->id }}').submit()">
                                                        <img  src="{{ asset('assets/images/add-to-cart.svg') }}"  width="25" height="25" alt="" title="">
                                                    </a>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <div>
                                            <img  src="{{ productImage($product->image) }}" alt="" title="" class="img-fluid img-boder-css">
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 name-pro">{{ $product->name }}</div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-5 col-sm-5 name-pro"><span>€{{ $product->presentPrice() }}</span></div>
                                        <div class="col-md-7 col-sm-7 text-right">
                                            <img  src="{{ asset('assets/images/products/str2.jpg') }}" alt="" title="">
                                            <img  src="{{ asset('assets/images/products/str2.jpg') }}" alt="" title="">
                                            <img  src="{{ asset('assets/images/products/str2.jpg') }}" alt="" title="">
                                            <img  src="{{ asset('assets/images/products/str2.jpg') }}" alt="" title="">
                                            <img  src="{{ asset('assets/images/products/str3.jpg') }}" alt="" title="">
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg wow fadeIn">
                                    <div class="clearfix"></div>
                                    <h4>&nbsp <strong>No items in that category!!</strong></h4>
                                    <div class="clearfix"></div>
                                </div>
                            @endforelse
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="row">
                            @if($products->count() > 0)
                                <div class="col-md-6 col-sm-6 col-xs-6 select-p">
                                    <div class="pagination">
                                        <h5>Showing <span>{{ $products->firstItem() }}</span> - <span>{{ $products->lastItem() }}</span> of <span>{{ $products->total() }}</span> items for
                                            @if($products->currentPage() == 1)
                                                <span>{{ $products->currentPage() }}st</span>
                                            @elseif($products->currentPage() == 2)
                                                <span>{{ $products->currentPage() }}nd</span>
                                            @elseif($products->currentPage() == 3)
                                                <span>{{ $products->currentPage() }}rd</span>
                                            @else
                                                <span>{{ $products->currentPage() }}th</span>
                                            @endif
                                            page.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 bread">
                                    <div class="breadcrumbs">
                                        {{ $products->appends(request()->input())->render('pagination::shopPagination') }}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('extra-script')
    {{ Html::style('assets/css/jquery-ui.css') }}
    {{ Html::script('assets/js/jquery-ui.js') }}
    <script type="text/javascript">
        $( function() {
            $('#slider-range').slider({
                range: true,
                min: Math.floor({{ $minPrice / 100 }}),
                max: Math.floor({{ $maxPrice / 100 }}),
                values: [ Math.floor({{ request()->filter == "range" ? request()->min : $minPrice / 100 }} ), Math.floor({{ request()->filter == "range" ? request()->max : $maxPrice / 100 }}) ],
                slide: function( event, ui ) {
                    // $( "#amount" ).val( "€" + ui.values[0] + " - €" + ui.values[1] );
                    $( "#min" ).val(ui.values[0]);
                    $( "#max" ).val(ui.values[1]);
                }
            });
            // $( "#amount" ).val( "€" + $( "#slider-range" ).slider( "values", 0 ) + " - €" + $( "#slider-range" ).slider( "values", 1) );
            $( "#min" ).val($( "#slider-range" ).slider( "values", 0 ));
            $( "#max" ).val($( "#slider-range" ).slider( "values", 1 ));
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.filter2').bind('click', function () {
                var min = $('#min').val();
                var max = $('#max').val();
                var url = "{!! route('shop.products.index', ['sub' => request()->sub,'sort' => request()->sort, 'filter' => 'range', 'min' => 'minPrice', 'max' => 'maxPrice']) !!}";
                url = url.replace('minPrice', min);
                url = url.replace('maxPrice', max);
                window.location.href = url;
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sorting').bind('change', function () {
                var value = this.value;
                var min = "{{ request()->min }}";
                var max = "{{ request()->max }}";
                if (value == "lower_price"){
                    var url = "{!! route('shop.products.index', ['sub' => request()->sub,'sort' => 'low_high','filter' => request()->filter, 'min' => 'minPrice', 'max' => 'maxPrice']) !!}";
                    url = url.replace('minPrice', min);
                    url = url.replace('maxPrice', max);
                    window.location.href = url;
                }
                if (value == "higher_price"){
                    var url = "{!! route('shop.products.index', ['sub' => request()->sub,'sort' => 'high_low','filter' => request()->filter, 'min' => 'minPrice', 'max' => 'maxPrice']) !!}";
                    url = url.replace('minPrice', min);
                    url = url.replace('maxPrice', max);
                    window.location.href = url;
                }
                if (value == "newest"){
                    var url = "{!! route('shop.products.index', ['sub' => request()->sub,'sort' => 'new','filter' => request()->filter, 'min' => 'minPrice', 'max' => 'maxPrice']) !!}";
                    url = url.replace('minPrice', min);
                    url = url.replace('maxPrice', max);
                    window.location.href = url;
                }
                if (value == "AtoZ"){
                    var url = "{!! route('shop.products.index', ['sub' => request()->sub,'sort' => 'a_z','filter' => request()->filter, 'min' => 'minPrice', 'max' => 'maxPrice']) !!}";
                    url = url.replace('minPrice', min);
                    url = url.replace('maxPrice', max);
                    window.location.href = url;
                }
                if (value == "ZtoA"){
                    var url = "{!! route('shop.products.index', ['sub' => request()->sub,'sort' => 'z_a','filter' => request()->filter, 'min' => 'minPrice', 'max' => 'maxPrice']) !!}";
                    url = url.replace('minPrice', min);
                    url = url.replace('maxPrice', max);
                    window.location.href = url;
                }
            });
        });
    </script>
@endsection
