@extends('shop.main')

@section('title', '| Shop')

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg">
                <div class="inner-head wow fadeInDown">
                    <h3>Product</h3>
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
                            <li><a href="index-2.html">HOME</a>
                            <li>/</li>
                            <li>SHOP</li>
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
                                        <div id="slider-range"></div>
                                        <p class="mt-3 mb-2 text-center">
                                            <input type="text" id="amount" readonly style="border:0; color:#f18a1a; font-weight:bold; text-align:center">
                                        </p>
                                        <div class="pull-right">
                                            <input   type="button" class="filter2" value="FILTER">
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="cat-div  wow fadeIn">
                                        <h2>HOT DEALS</h2>
                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active text-center">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-5"><img alt="" title=""  src="assets/images/left-product.jpg" class="img-fluid"></div>
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
                                                            <div class="product-name">
                                                                <h3>Jewellery Name</h3>
                                                            </div>
                                                            <div class="rate-css"><span>$600.00</span>&nbsp;&nbsp; <samp class="text-de">$850.00</samp></div>
                                                            <div><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str2.jpg" alt="" title=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item  text-center">
                                                    <div class="row">
                                                        <div class="col-md-12 col-sm-5"><img alt="" title=""  src="assets/images/left-product.jpg" class="img-fluid"></div>
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
                                                            <div class="product-name">
                                                                <h3>Jewellery Name</h3>
                                                            </div>
                                                            <div class="rate-css"><span>$600.00</span>&nbsp;&nbsp; <samp class="text-de">$850.00</samp></div>
                                                            <div><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str2.jpg" alt="" title=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Controls -->
                                            <a class="left arrow-left" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right arrow-right" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-12">
                                    <div class="cat-div  wow fadeIn">
                                        <h2>Special offers</h2>
                                        <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="product-scroll">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-2 col-4"><img  src="assets/images/scroll-2.jpg" alt="" title="" class="img-fluid"></div>
                                                            <div class="col-md-6 col-sm-9 col-8">
                                                                <h3>Product name</h3>
                                                                <div> <img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""> <img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str2.jpg" alt="" title=""></div>
                                                                <h4>$600.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="product-scroll">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-2 col-4"><img  src="assets/images/scroll-2.jpg" class="img-fluid" alt="" title=""></div>
                                                            <div class="col-md-6 col-sm-9 col-8">
                                                                <h3>Product name</h3>
                                                                <div> <img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""> <img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str2.jpg" alt="" title=""></div>
                                                                <h4>$600.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="product-scroll">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-2 col-4"><img  src="assets/images/scroll-2.jpg" class="img-fluid" alt="" title=""></div>
                                                            <div class="col-md-6 col-sm-9 col-8">
                                                                <h3>Product name</h3>
                                                                <div> <img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""> <img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str2.jpg" alt="" title=""></div>
                                                                <h4>$600.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="product-scroll">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-2 col-4"><img  src="assets/images/scroll-2.jpg" alt="" title="" class="img-fluid"></div>
                                                            <div class="col-md-6 col-sm-9 col-8">
                                                                <h3>Product name</h3>
                                                                <div><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str1.jpg" alt="" title=""><img  src="assets/images/str2.jpg" alt="" title=""></div>
                                                                <h4>$600.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Controls -->
                                            <a class="left arrow-left" href="#carousel-example-generic3" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right arrow-right" href="#carousel-example-generic3" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
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
                                <select class="selectpicker select-1" data-style="btn-primary">
                                    <option>Newest first</option>
                                    <option>Newest first</option>
                                    <option>Newest first</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 bread">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="#" class="active">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product1.jpg" alt="" title="" class="img-fluid img-boder-css"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00 </span>&nbsp;<span class="text-0">$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title="" ></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product2.jpg" alt="" title="" class="img-fluid img-boder-css"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img alt="" title=""  src="assets/images/products/str2.jpg"> <img alt="" title=""  src="assets/images/products/str3.jpg"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product3.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product4.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product5.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product6.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product7.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product8.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product9.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product1.jpg" alt="" title="" class="img-fluid img-boder-css"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00 </span>&nbsp;<span class="text-0">$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title="" ></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product2.jpg" alt="" title="" class="img-fluid img-boder-css"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img alt="" title=""  src="assets/images/products/str2.jpg"> <img alt="" title=""  src="assets/images/products/str3.jpg"></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product3.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product7.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product8.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg  wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product9.jpg" class="img-fluid img-boder-css" alt="" title=""></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-12 thum-mrg wow fadeIn">
                                <div class="col-lg-12 padd0">
                                    <div class="product-hover">
                                        <div><a href="product-detail2.html"> <img  src="assets/images/magnifier.svg"  width="20" height="20" alt="" title=""></a> &nbsp;&nbsp; <a href="cart.html"> <img  src="assets/images/add-to-cart.svg"  width="25" height="25" alt="" title=""></a></div>
                                    </div>
                                    <div><img  src="assets/images/products/product1.jpg" alt="" title="" class="img-fluid img-boder-css"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 name-pro">Jewellery Name</div>
                                    <div class="clearfix"></div>
                                    <div class="col-md-6 col-sm-6 name-pro"><span>$ 36.00 </span>&nbsp;<span class="text-0">$ 36.00</span></div>
                                    <div class="col-md-6 col-sm-6 text-right"><img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str2.jpg" alt="" title=""> <img  src="assets/images/products/str3.jpg" alt="" title=""></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">></a></li>
                            </ul>
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
    {{ Html::script('assets/js/slider-range.js') }}
@endsection
