@extends('shop.main')

@section('title', '| Shopping Cart')

@section('extra-css')

@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="inner-bg">
            <div class="inner-head wow fadeInDown">
                <h3>Shopping Cart</h3>
                <h4>
                    <div class="shopping-cart">
                        @if(Cart::count() > 0)
                            <div class="count">You currently have {{ Cart::count() }} item(s) in your shopping cart</div>
                            <div class="clearfix"></div>
                        @endif
                    </div>
                </h4>
            </div>
        </div>
    </section>
    <!--container-->
    <div class="container">
        <div class="shop-in">
            <!--breadcrumbs -->
            <div class="bread2">
                <ul>
                    <li><a href="{{ route('shop.home.index') }}">HOME</a>
                    <li>/</li>
                    <li><a href="{{ route('shop.products.index') }}">SHOP</a></li>
                    <li>/</li>
                    <li>Shopping Cart</li>
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
                        <div class="clearfix"> </div>
                        @include('shop.messages.error')
                        <div class="clearfix"> </div>
                        <!--Table products Shopping Cart-->
                        <div class="table-responsive table-none wow fadeIn">
                            <table class="table checkout-table">
                                <tr class="table-h">
                                    <td>&nbsp;</td>
                                    <td>Item Details</td>
                                    <td>Unit Price</td>
                                    <td>Quantity</td>
                                    <td>Edit</td>
                                    <td>Subtotal</td>
                                </tr>
                                @if(Cart::count() > 0)
                                    @foreach(Cart::content() as $item)
                                        <tr>
                                            <td class="text-center">
                                                <a href="{{ route('shop.products.show', $item->model->slug) }}">
                                                    <img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <h1>Diamond Ring <br>
                                                    <a href="{{ route('shop.products.show', $item->model->slug) }}"><span> {{ $item->model->name }}</span></a>
                                                </h1>
                                            </td>
                                            <td><div class="cost2">€{{ $item->model->presentPrice() }}</div></td>
                                            <td>
                                                <div class="inc-dre">
                                                    <div class="input-group product-item">
                                                        <span class="input-group-btn">
                                                            <button type="button" data-id="{{ $item->rowId }}" class="btn btn-default btn-number dec-btn"> <span class="glyphicon glyphicon-minus"></span> </button>
                                                        </span>
                                                        <input name="quantity" class="input-number quantity-no" value="{{ $item->qty }}" type="text">
                                                        <span class="input-group-btn">
                                                            <button type="button" data-id="{{ $item->rowId }}" class="btn btn-default btn-number inc-btn"> <span class="glyphicon glyphicon-plus"></span> </button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="remove-css text-center">
                                                <p>
                                                    {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.destroy',$item->rowId], 'id' => 'deleteCart'.$item->model->id]) !!}
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <a href="#" onclick="document.getElementById('deleteCart{{ $item->model->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    {!! Form::close() !!}
                                                    &nbsp &nbsp
                                                    {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.saveForLater',$item->rowId], 'id' => 'saveForLater'.$item->model->id]) !!}
                                                        {{ csrf_field() }}
                                                    <a href="#" onclick="document.getElementById('saveForLater{{ $item->model->id }}').submit()"><i class="fa fa-save" aria-hidden="true"></i></a>
                                                    {!! Form::close() !!}
                                                </p>
                                            </td>
                                            <td><div class="cost">€{{ number_format($item->subtotal,2) }}</div></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="table-h">
                                        <td colspan="6" class="text-center">
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                            <div class="shopping-cart">
                                                <div class="count">Your Shopping Cart is Empty</div>
                                            </div>
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                            <div class="clearfix"></div><br>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                        @if(Cart::count() == 0)
                            <div class="clearfix"></div><br>
                            <!--Free! - Ground Shipping / Continue Shopping if cart empty-->
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
                                            <a href="{{ route('shop.products.index') }}">
                                                <i class="fa fa-chevron-left" aria-hidden="true"></i> Continue Shopping
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div><br>
                        @endif
                        <!--Table products Shopping Cart small devices-->
                        <div class="table-responsive table-none2 wow fadeIn">
                            <div class="cat-div  wow fadeIn">
                                <h2>
                                    <div class="save-for-later">
                                        @if(Cart::count() > 0)

                                            <div class="count">{{ Cart::instance('default')->count() }} item(s) <span>in shopping cart</span></div>
                                        @else
                                            <span>No products in shopping cart!</span>
                                        @endif

                                    </div>
                                    <div class="clearfix"></div>
                                </h2>
                                <div class="clearfix"></div><br>
                                @if(Cart::count() > 0)
                                    @foreach(Cart::content() as $item)
                                        <table class="table checkout-table">
                                            <tr>
                                                <td colspan="2" class="text-center">
                                                    <a href="{{ route('shop.products.show', $item->model->slug) }}">
                                                        <img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="product-name">
                                                <td>
                                                    <h1>
                                                        Diamond Ring <br>
                                                        <a href="{{ route('shop.products.show', $item->model->slug) }}"><span> {{ $item->model->name }}</span></a>
                                                    </h1>
                                                </td>
                                                <td><div class="cost2">€{{ $item->model->presentPrice() }}</div></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="inc-dre">
                                                        <div class="input-group product-item">
                                                            <span class="input-group-btn">
                                                                <button type="button" data-id="{{ $item->rowId }}" class="btn btn-default btn-number dec-btn"> <span class="glyphicon glyphicon-minus"></span> </button>
                                                            </span>
                                                            <input name="quantity" class="input-number quantity-no" value="{{ $item->qty }}" type="text">
                                                            <span class="input-group-btn">
                                                                <button type="button" data-id="{{ $item->rowId }}" class="btn btn-default btn-number inc-btn"> <span class="glyphicon glyphicon-plus"></span> </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <p>
                                                        {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.destroy',$item->rowId], 'id' => 'deleteCartMin'.$item->model->id]) !!}
                                                            {{ csrf_field() }}
                                                            {{ method_field('DELETE') }}
                                                            <a href="#" onclick="document.getElementById('deleteCartMin{{ $item->model->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        {!! Form::close() !!}
                                                        &nbsp &nbsp
                                                        {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.saveForLater',$item->rowId], 'id' => 'saveForLaterMin'.$item->model->id]) !!}
                                                            {{ csrf_field() }}
                                                            <a href="#" onclick="document.getElementById('saveForLaterMin{{ $item->model->id }}').submit()"><i class="fa fa-save" aria-hidden="true"></i></a>
                                                        {!! Form::close() !!}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"><div class="cost">€{{ number_format($item->subtotal,2) }}</div></td>
                                            </tr>
                                        </table>
                                    @endforeach
                                @else
                                    <table class="table checkout-table">
                                        <tr class="table-h">
                                            <td class="text-center"><div class="shopping-cart"><div class="count">Your Shopping Cart is Empty</div></div></td>
                                        </tr>
                                    </table>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(Cart::count() > 0)
                <div class="clearfix"></div><br>
                <!--Free! - Ground Shipping / Continue Shopping other position if cart have items-->
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
                                <a href="{{ route('shop.products.index') }}">
                                    <i class="fa fa-chevron-left" aria-hidden="true"></i> Continue Shopping
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div><br>
            @endif
            @if(Cart::count() > 0)
            <!--Order Summary/coupon/Instructions-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    @if(! session()->has('coupon'))
                        <div class="cat-div  wow fadeIn">
                            <h2>Coupon Code</h2>
                            <div class="clearfix"></div><br>
                            <div class="row">
                                <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                    <h4>If you have a coupon code, please enter it in the box below</h4>
                                </div>
                            </div>
                            <div class="clearfix"></div><br>
                            <div class="row">
                                <form class="discount-div" action="{{ route('shop.coupons.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <span> &nbsp Discount Code?</span>
                                    <input type="text" class="discount" name="coupon_code" id="coupon_code">
                                    <input type="submit" value="APPLY" class="apply">
                                    <div class="clearfix"></div>
                                    <br>
                                </form>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endif
                    <div class="cat-div  wow fadeIn">
                        <h2>instructions for seller</h2>
                        <div class="clearfix"></div><br>
                        <div class="row">
                            <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                <h4>If you have some information for the seller you can leave them in the box below</h4>
                            </div>
                        </div>
                        <div class="clearfix"></div><br>
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
                        <div class="clearfix"></div><br>
                        <div class="row">
                            <div class="col-md-10 shipping col-sm-10 col-xs-12">
                                <h4>Shipping and additional costs are calculated based on values you have entered.</h4>
                            </div>
                        </div>
                        <div class="clearfix"></div><br><br>
                        <h2>
                            <div class="order-summary">
                                <span class="name">Order Subtotal</span>
                                <span class="order-price">€{{ Cart::subtotal()}}</span>
                            </div>
                            <div class="clearfix"></div><br>
                        </h2>
                        <div class="clearfix"></div><br><br>
                        @if(session()->has('coupon'))
                            <h2>
                                <div class="order-summary">
                                    <span class="name">Discount ({{ session()->get('coupon')['name'] }})</span>
                                    {!! Form::open(['method' => 'POST','route' => 'shop.coupons.destroy', 'id' => 'deleteDiscount']) !!}
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="#" onclick="document.getElementById('deleteDiscount').submit()"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    {!! Form::close() !!}
                                    <span class="order-price">- €{{ number_format($discount, 2) }}</span>
                                </div>
                                <div class="clearfix"></div><br>
                            </h2>
                            <div class="clearfix"></div><br><br>
                            <h2>
                                <div class="order-summary">
                                    <span class="name">New Discount Subtotal</span>
                                    <span class="order-price">€{{ number_format($newSubtotal, 2) }}</span>
                                </div>
                                <div class="clearfix"></div><br>
                            </h2>
                            <div class="clearfix"></div><br><br>
                        @endif
                        <h2>
                            <div class="order-summary">
                                <span class="name">Tax (24%)</span>
                                <span class="order-price">€{{ number_format($newTax, 2) }}</span>
                            </div>
                            <div class="clearfix"></div><br>
                        </h2>
                        <div class="clearfix"></div><br><br>
                        @if(!session()->has('coupon'))
                            <h2>
                                <div class="order-summary">
                                    <span class="name">Shipping and handling</span>
                                    <span class="order-price">€0.00</span>
                                </div>
                                <div class="clearfix"></div><br>
                            </h2>
                            <div class="clearfix"></div><br><br>
                        @endif
                        <h2>
                            <div class="order-summary">
                                <span class="name">Total</span>
                                <span class="order-price price">€{{ number_format($newTotal, 2) }}</span>
                            </div>
                            <div class="clearfix"></div><br>
                        </h2>
                        <div class="clearfix"></div><br><br>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            @endif
            <div class="cat-div  wow fadeIn">
                <h2>
                    <div class="save-for-later">
                        @if(Cart::instance('saveForLater')->count() > 0)

                            <div class="count">{{ Cart::instance('saveForLater')->count() }} item(s) <span>saved for later</span></div>
                        @else
                            <span>No products saved for later!</span>
                        @endif

                    </div>
                    <div class="clearfix"></div>
                </h2>
                <div class="clearfix"></div><br>
                <div class="checkout">
                    <div class="table-responsive table-none wow fadeIn">
                        <!--table save for later-->
                        <table class="table checkout-table">
                            <tr class="table-h">
                                <td>&nbsp;</td>
                                <td>Item Details</td>
                                <td>Move To Cart</td>
                                <td>Delete</td>
                                <td>Price</td>
                            </tr>
                            @if(Cart::instance('saveForLater')->count() > 0)
                                @foreach(Cart::instance('saveForLater')->content() as $item)
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{ route('shop.products.show', $item->model->slug) }}">
                                                <img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid">
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <h1>Diamond Ring <br>
                                                <a href="{{ route('shop.products.show', $item->model->slug) }}"><span> {{ $item->model->name }}</span></a>
                                            </h1>
                                        </td>
                                        <td class="remove-css text-center">
                                            <p>
                                                {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.switchToCart',$item->rowId], 'id' => 'switchToCart'.$item->model->id]) !!}
                                                {{ csrf_field() }}
                                                <a href="#" onclick="document.getElementById('switchToCart{{ $item->model->id }}').submit()"><i class="fa fa-undo" aria-hidden="true"></i></a>
                                                {!! Form::close() !!}
                                            </p>
                                        </td>
                                        <td class="remove-css text-center">
                                            <p>
                                                {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.destroyForLater',$item->rowId], 'id' => 'deleteSave'.$item->model->id]) !!}
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="#" onclick="document.getElementById('deleteSave{{ $item->model->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                {!! Form::close() !!}
                                            </p>
                                        </td>
                                        <td><div class="cost">€{{ number_format($item->subtotal,2) }}</div></td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                    <div class="table-responsive table-none2 wow fadeIn">
                        <!--table save for later small devices-->
                        @if(Cart::instance('saveForLater')->count() > 0)
                            @foreach(Cart::instance('saveForLater')->content() as $item)
                                <table class="table checkout-table">
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <a href="{{ route('shop.products.show', $item->model->slug) }}">
                                                <img  src="assets/images/products/checkout.jpg" alt="" title="" class="img-fluid">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="product-name">
                                        <td>
                                            <h1>
                                                Diamond Ring <br>
                                                <a href="{{ route('shop.products.show', $item->model->slug) }}"><span> {{ $item->model->name }}</span></a>
                                            </h1>
                                        </td>
                                        <td><div class="cost2">€{{ $item->model->presentPrice() }}</div></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <p>
                                                {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.switchToCart',$item->rowId], 'id' => 'switchToCartMin'.$item->model->id]) !!}
                                                {{ csrf_field() }}
                                                <a href="#" onclick="document.getElementById('switchToCartMin{{ $item->model->id }}').submit()"><i class="fa fa-undo" aria-hidden="true"></i></a>
                                                {!! Form::close() !!}
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <p>
                                                {!! Form::open(['method' => 'POST','route' => ['shop.shopping-cart.destroyForLater',$item->rowId], 'id' => 'deleteSaveMin'.$item->model->id]) !!}
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <a href="#" onclick="document.getElementById('deleteSaveMin{{ $item->model->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                {!! Form::close() !!}
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"><div class="cost">€{{ number_format($item->subtotal,2) }}</div></td>
                                    </tr>
                                </table>
                            @endforeach
                        @else
                            <table class="table checkout-table">
                                <tr class="table-h">
                                    <td class="text-center"><div class="shopping-cart"><div class="count">Your Save For Later Basket is Empty!</div></div></td>
                                </tr>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
            <div class="clearfix"></div><br>
            <!--checkout button-->
            @if(Cart::instance('default')->count() > 0)
                <div class="col-lg-12 text-center secure">
                    <a href="{{ route('shop.checkout.index') }}">
                        Proceed to checkout <i class="fa fa-long-arrow-right"></i>
                    </a>
                </div>
            @endif
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
@endsection

@section('extra-script')
    {{ Html::script('assets/js/button-inc.js') }}
    {{ Html::script('js/app.js') }}
    <script>
        $(document).ready(function() {
            const classname = document.querySelectorAll('.product-item');
            Array.from(classname).forEach(function (element) {
                const classnameIncButton = element.querySelector('.input-group-btn .inc-btn');
                classnameIncButton.addEventListener('click', function () {
                    var classnameTextQty = element.querySelector('.quantity-no');
                    var id = classnameIncButton.getAttribute('data-id');
                    var Textqty = classnameTextQty.value;
                    axios.patch(`/cart/${id}`, {
                        quantity: Textqty
                    }).then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('shop.shopping-cart.index') }}';
                    }).catch(function (error) {
                        //console.log(error);
                        window.location.href = '{{ route('shop.shopping-cart.index') }}';
                    });
                });
                const classnameDecButton = element.querySelector('.input-group-btn .dec-btn');
                classnameDecButton.addEventListener('click', function () {
                    var classnameTextQty = element.querySelector('.quantity-no');
                    var id = classnameDecButton.getAttribute('data-id');
                    var Textqty1 = classnameTextQty.value;
                    axios.patch(`/cart/${id}`, {
                        quantity: Textqty1
                    }).then(function (response) {
                        // console.log(response);
                        window.location.href = '{{ route('shop.shopping-cart.index') }}';
                    }).catch(function (error) {
                        //console.log(error);
                        window.location.href = '{{ route('shop.shopping-cart.index') }}';
                    });
                });
            });
        });
    </script>
@endsection
