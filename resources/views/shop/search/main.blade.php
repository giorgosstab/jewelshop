@extends('shop.main')

@section('title', '| Search Result')

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
    {{ Html::style("https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch.min.css") }}
    {{ Html::style("https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4/dist/instantsearch-theme-algolia.min.css") }}
@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="inner-bg3">
            <div class="inner-head wow fadeInDown">
                <h3>Search Result</h3>
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
                    <li><a href="{{ route('shop.home.index') }}">HOME</a>
                    <li>/</li>
                    <li>search</li>
                </ul>
            </div>
            <!--breadcrumbs -->
            <div class="clearfix"> </div>
            <div class="row">
                <!--left-side-->
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div id="search-box">
                        <!-- SearchBox widget will appear here -->
                    </div>
                    <div class="clearfix"></div><br>
                    <div id="clear-all" class="pull-right">
                        <!-- ClearAll widget will appear here -->
                    </div>
                    <div class="clearfix"></div><br>
                    <button data-toggle="collapse" data-target="#div-open" class="menu-icon"></button>
                    <div class="clearfix"></div>
                    <div id="div-open" class="collapse  wow fadeIn">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="cat-div  wow fadeIn">
                                    <h2>Category</h2>
                                    <div class="Category">
                                        <div id="accordion">
                                            <div class="card-header"> <a class="card-link" data-toggle="collapse" href="#collapseOne"> PRODUCT TYPE </a> </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="m-0 p-0">
                                                        <div id="refinement-list">
                                                            <!-- RefinementList widget will appear here -->
                                                        </div>
                                                    </div>
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
                                        </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="cat-div  wow fadeIn">
                                    <h2>FILTER BY PRICE</h2>
                                    <div id="price">
                                        <!-- RefinementList widget will appear here -->
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
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
                        <div class="col-md-6 col-sm-6 col-xs-6 select-p">
                            {{--<div id="sortbycontainer">--}}

                            {{--</div>--}}
                            <select id="sorting" class="selectpicker select-1" data-style="btn-primary">
                                <option {{ request()->sort == "new" ? 'selected' : '' }} value="newest">Date Added: Latest First</option>
                                <option {{ request()->sort == "low_high" ? 'selected' : '' }} value="lower_price">Price: Lower to Higher</option>
                                <option {{ request()->sort == "high_low" ? 'selected' : '' }} value="higher_price">Price: Higher to Lower</option>
                                <option {{ request()->sort == "a_z" ? 'selected' : '' }} value="AtoZ">Product Name: A to Z</option>
                                <option {{ request()->sort == "z_a" ? 'selected' : '' }} value="ZtoA">Product Name: Z to A</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 bread">
                            <div class="pull-right">
                                <div id="pagination-top">
                                    <!-- Pagination widget will appear here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 select-p">
                            <div class="pagination">
                                <div id="stats-container-top">
                                    <!-- stats widget will appear here -->
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row">
                        <div id="hits">
                            <!-- Hits widget will appear here -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 select-p">
                            <div class="pagination">
                                <div id="stats-container-bot">
                                    <!-- stats widget will appear here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 bread">
                            <div class="pull-right">
                                <div id="pagination-bot">
                                    <!-- Pagination widget will appear here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--contact-form-->
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- container-->
    <div class="clearfix"></div>
@endsection

@section('extra-script')
    {{ Html::script("https://cdn.jsdelivr.net/npm/instantsearch.js@2.10.4") }}
    {{ Html::script("js/algoliainsta.js") }}
@endsection
