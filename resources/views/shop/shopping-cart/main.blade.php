@extends('shop.main')

@section('title', '| Shopping Cart')

@section('extra-css')
    {{ Html::style('assets/css/custom.css') }}
@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="inner-bg">
            <div class="inner-head wow fadeInDown">
                <h3>Shopping Cart</h3>
                <h4>
                    <div class="shopping-cart">
                        <div class="count">You currently have 2 item(s) in your shopping cart</div>
                    </div>
                </h4>
                <div class="clearfix"></div>
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
                    <li><a href="index-2.html">HOME</a>
                    <li>/</li>
                    <li><a href="product.html">SHOP</a></li>
                    <li>/</li>
                    <li>cart</li>
                </ul>
            </div>
            <!--breadcrumbs -->
            <div class="clearfix"> </div>
            <div class="row">
                <!--left-side-->
                <div class="col-lg-3 col-md-12 col-sm-12">

                    @include('shop.layouts.related-products-min')

                    <div class="cat-div  wow fadeIn">
                        <h2>Download our app</h2>
                        <div class="download-our"> <a href="#" class="pull-left"><img  src="assets/images/app.png" alt="" title="" class="img-fluid"></a> <a href="#" class="pull-left"><img  src="assets/images/google-play.png" alt="" title="" class="img-fluid"></a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--right-side-->
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="checkout">
                        <div class="cat-div  wow fadeIn">
                            <h2>
                                <div class="save-for-later">
                                    <div class="count"><span>Your currently have </span>2 item(s) <span>in your shopping cart</span></div>
                                </div>
                                <div class="clearfix"></div>
                            </h2>
                            <div class="clearfix"></div><br>
                            <!--table-->
                            <div class="table-responsive table-none wow fadeIn">
                                <table class="table checkout-table">
                                    <tr class="table-h">
                                        <td>&nbsp;</td>
                                        <td>ITEM Details</td>
                                        <td>UNIT PRICE</td>
                                        <td>Quantity</td>
                                        <td>EDIT</td>
                                        <td>SUBTOTAL</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid"></td>
                                        <td class="product-name"><h1>Diamond Ring <br>
                                                <span> JE-65450</span> </h1></td>
                                        <td><div class="cost2">$ 3,200.65</div></td>
                                        <td><div class="inc-dre">
                                                <div class="input-group"><span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                      </span>
                                                    <input name="quant[1]" class="input-number" value="1" type="text">
                                                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                      </span> </div>
                                            </div></td>
                                        <td class="remove-css text-center"><p><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    <br>
                                                    Remove </a> </p>
                                        </td>
                                        <td><div class="cost">$ 3,200.65</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" class="img-fluid" title=""></td>
                                        <td class="product-name"><h1>Diamond Ring <br>
                                                <span> JE-65450</span> </h1></td>
                                        <td><div class="cost2">$ 3,200.65</div></td>
                                        <td><div class="inc-dre">
                                                <div class="input-group"><span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                      </span>
                                                    <input name="quant[1]" class="input-number" value="1" type="text">
                                                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                      </span> </div>
                                            </div></td>
                                        <td class="remove-css text-center"><p><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    <br>
                                                    Remove </a> </p></td>
                                        <td><div class="cost">$ 3,200.65</div></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="table-responsive table-none2 wow fadeIn">
                            <table class="table checkout-table">
                                <tr>
                                    <td colspan="2" class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid"></td>
                                </tr>
                                <tr class="product-name">
                                    <td><h1>Diamond Ring <br>
                                            <span> JE-65450</span> </h1></td>
                                    <td><div class="cost2">$ 3,200.65</div></td>
                                </tr>
                                <tr>
                                    <td><div class="inc-dre">
                                            <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                                                <input name="quant[1]" class="input-number" value="1" type="text">
                                                <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
                                        </div></td>
                                    <td><p class="text-center"> <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i><br>Remove

                                            </a>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><div class="cost">$ 3,200.65</div></td>
                                </tr>
                            </table>
                            <table class="table checkout-table">
                                <tr>
                                    <td colspan="2" class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid"></td>
                                </tr>
                                <tr class="product-name">
                                    <td><h1>Diamond Ring <br>
                                            <span> JE-65450</span> </h1></td>
                                    <td><div class="cost2">$ 3,200.65</div></td>
                                </tr>
                                <tr>
                                    <td><div class="inc-dre">
                                            <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                                                <input name="quant[1]" class="input-number" value="1" type="text">
                                                <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
                                        </div></td>
                                    <td><p class="text-center"> <a href="#"> <i class="fa fa-trash-o" aria-hidden="true"></i><br>
                                                Remove
                                            </a> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"><div class="cost">$ 3,200.65</div></td>
                                </tr>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="discount-div">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-xs-12 text-center"><img  src="assets/images/products/icon.png" alt="" title="" class="img-fluid"></div>
                            <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                <h3>Always Free! - Ground Shipping & Returns</h3>
                                <h4>Expedited shipping options available at checkout</h4>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 col-sm-6 pull-right ">
                    <div class="subtotal">
                        <div class="secure">
                            <a href="{{ route('shop.products.main') }}">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i> Continue Shopping
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div><br>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">

                        <div class="cat-div  wow fadeIn">
                            <h2>Coupon Code</h2>
                            <div class="clearfix"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                    <h4>If you have a coupon code, please enter it in the box below</h4>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="row">
                                <div class="discount-div">
                                    <span> &nbsp Discount Code?</span>
                                    <input type="text" class="discount">
                                    <input type="button" value="APPLY" class="apply">
                                    <div class="clearfix"></div>
                                    <br>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>


                        <div class="cat-div  wow fadeIn">
                            <h2>instructions for seller</h2>
                            <div class="clearfix"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                    <h4>If you have some information for the seller you can leave them in the box below</h4>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="row">
                                <div class="discount-div">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="instructions" rows="3" cols=55" placeholder="Write something here..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="cat-div  wow fadeIn">
                        <h2>Order summary</h2>
                        <div class="clearfix"></div>
                        <br>
                        <div class="row">
                            <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                <h4>Shipping and additional costs are calculated based on values you have entered.</h4>
                            </div>
                        </div>
                        <div class="clearfix"></div><br><br>
                        <h2>
                            <div class="order-summary">
                                <span class="name">Order Subtotal</span>
                                <span class="order-price">€1,000.00</span>
                            </div>
                            <div class="clearfix"></div><br>
                        </h2>
                        <div class="clearfix"></div><br><br>
                        <h2>
                            <div class="order-summary">
                                <span class="name">Shipping and handling</span>
                                <span class="order-price">€0.00</span>
                            </div>
                            <div class="clearfix"></div><br>
                        </h2>
                        <div class="clearfix"></div><br><br>
                        <h2>
                            <div class="order-summary">
                                <span class="name">Tax (24%)</span>
                                <span class="order-price">€210.00</span>
                            </div>
                            <div class="clearfix"></div><br>
                        </h2>
                        <div class="clearfix"></div><br><br>
                        <h2>
                            <div class="order-summary">
                                <span class="name">Total</span>
                                <span class="order-price price">€1,210.00</span>
                            </div>
                            <div class="clearfix"></div><br>
                        </h2>
                        <div class="clearfix"></div><br><br>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="cat-div  wow fadeIn">
                <h2>
                    <div class="save-for-later">
                        <div class="count">2 item(s) <span>saved for later</span></div>
                    </div>
                    <div class="clearfix"></div>
                </h2>
                <div class="clearfix"></div><br>
                <div class="checkout">
                    <!--table-->
                    <div class="table-responsive table-none wow fadeIn">
                        <table class="table checkout-table">
                            <tr class="table-h">
                                <td>&nbsp;</td>
                                <td>ITEM Details</td>
                                <td>UNIT PRICE</td>
                                <td>Quantity</td>
                                <td>EDIT</td>
                                <td>SUBTOTAL</td>
                            </tr>
                            <tr>
                                <td class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid"></td>
                                <td class="product-name"><h1>Diamond Ring <br>
                                        <span> JE-65450</span> </h1></td>
                                <td><div class="cost2">$ 3,200.65</div></td>
                                <td><div class="inc-dre">
                                        <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                                            <input name="quant[1]" class="input-number" value="1" type="text">
                                            <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
                                    </div></td>
                                <td class="remove-css text-center"><p><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                            <br>
                                            Remove </a> </p>
                                </td>
                                <td><div class="cost">$ 3,200.65</div></td>
                            </tr>
                            <tr>
                                <td class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" class="img-fluid" title=""></td>
                                <td class="product-name"><h1>Diamond Ring <br>
                                        <span> JE-65450</span> </h1></td>
                                <td><div class="cost2">$ 3,200.65</div></td>
                                <td><div class="inc-dre">
                                        <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                                            <input name="quant[1]" class="input-number" value="1" type="text">
                                            <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
                                    </div></td>
                                <td class="remove-css text-center"><p><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                            <br>
                                            Remove </a> </p></td>
                                <td><div class="cost">$ 3,200.65</div></td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive table-none2 wow fadeIn">
                        <table class="table checkout-table">
                            <tr>
                                <td colspan="2" class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid"></td>
                            </tr>
                            <tr class="product-name">
                                <td><h1>Diamond Ring <br>
                                        <span> JE-65450</span> </h1></td>
                                <td><div class="cost2">$ 3,200.65</div></td>
                            </tr>
                            <tr>
                                <td><div class="inc-dre">
                                        <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                                            <input name="quant[1]" class="input-number" value="1" type="text">
                                            <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
                                    </div></td>
                                <td><p class="text-center"> <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i><br>Remove

                                        </a>

                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><div class="cost">$ 3,200.65</div></td>
                            </tr>
                        </table>
                        <table class="table checkout-table">
                            <tr>
                                <td colspan="2" class="text-center"><img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid"></td>
                            </tr>
                            <tr class="product-name">
                                <td><h1>Diamond Ring <br>
                                        <span> JE-65450</span> </h1></td>
                                <td><div class="cost2">$ 3,200.65</div></td>
                            </tr>
                            <tr>
                                <td><div class="inc-dre">
                                        <div class="input-group"><span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]"> <span class="glyphicon glyphicon-minus"></span> </button>
                  </span>
                                            <input name="quant[1]" class="input-number" value="1" type="text">
                                            <span class="input-group-btn">
                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]"> <span class="glyphicon glyphicon-plus"></span> </button>
                  </span> </div>
                                    </div></td>
                                <td><p class="text-center"> <a href="#"> <i class="fa fa-trash-o" aria-hidden="true"></i><br>
                                            Remove
                                        </a> </p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><div class="cost">$ 3,200.65</div></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br>
            <div class="col-lg-12 text-center secure">
                <a href="#">
                    Proceed to checkout <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
@endsection
