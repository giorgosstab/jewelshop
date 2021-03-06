@extends('shop.main')

@section('title', theme('order_title'))

@section('extra-css')
    <style>
        .inner-bg1 {
            background: url("{{ settingsAdminImageExist(theme('order_parallax'),"order") }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding:150px 0
        }
    </style>

    {{ Html::style('assets/css/profile-order.css') }}
    {{ Html::style('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css') }}
@endsection

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg1">
                <div class="inner-head wow fadeInDown">
                    <h3>{{ theme('order_title') }} #{{ $order->id }}</h3><br>
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
                            <li><a href="{{ route('shop.home.index') }}">{{ theme('home_title') }}</a></li>
                            <li>/</li>
                            <li><a href="{{ route('shop.profile.index') }}#order-tab">{{ theme('order_title') }}</a></li>
                            <li>/</li>
                            <li>{{ theme('order_title') }} #{{ $order->id }}</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div><br>
                <div class="row">
                    <!--left-side-->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="clearfix"> </div><br>
                                <!-- Customer Sidebar-->
                                <div class="customer-sidebar">
                                    <div class="customer-profile">
                                        <a href="#" class="d-inline-block">
                                            <img src="{{ secure_asset('storage/' . $user->avatar) }}" class="img-fluid rounded-circle customer-image"></a>
                                        <h5>{{ $user->name }}</h5>
                                        @if(!empty($user->userDetail))
                                            <p class="text-muted text-small">{{ $user->userDetail->city }}, {{ $user->userDetail->country }}</p>
                                        @else
                                            <p class="text-muted text-small">City, COUNTRY</p>
                                        @endif
                                    </div>
                                    <nav class="list-group customer-nav">
                                        <a href="{{ route('shop.profile.index') }}#order-tab" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-chevron-left"></span>Back</span></a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--right-side-->
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-pane fade show active" id="profile-tab">
                                    <p><h2>Order #{{ $order->id }} was placed on {{ $order->created_at->format('d/m/Y') }} and is currently Being prepared.</h2></p>
                                    <p><h3>If you have any questions, please feel free to <a style="color: #dfb859" href="{{ route('shop.contact.index') }}"><span class="contact">contact us</span></a>, our customer service center is working for you 24/7.</h3></p>
                                    <div class="clearfix"> </div><br>
                                    <div class="collapse-group">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab">
                                                <h3 class="panel-title panel-border-circle">
                                                    <a role="button" data-toggle="collapse" href="#collapsePassword" aria-expanded="true" class="trigger collapsed">
                                                        Product Purchase List
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapsePassword" class="panel-collapse collapse show" role="tabpanel">
                                                <div class="panel-body">

                                                    <div class="clearfix"> </div>
                                                    <!--Table products list-->
                                                    <div class="table-responsive table-none wow fadeIn">
                                                        <table class="table checkout-table">
                                                            <tr class="table-h">
                                                                <td>&nbsp;</td>
                                                                <td>Item Details</td>
                                                                <td>Unit Price</td>
                                                                <td>Quantity</td>
                                                                <td>Subtotal</td>
                                                            </tr>
                                                            @foreach($order->products as $product)
                                                                <tr>
                                                                    <td class="text-center">
                                                                        <a href="{{ route('shop.products.show',$product->slug) }}">
                                                                            <img src="{{ secure_asset('storage/'.$product->image) }}" class="img-fluid" alt="{{$product->name}}" title="{{$product->name}}" width="110">
                                                                        </a>
                                                                    </td>
                                                                    <td class="product-name">
                                                                        <h1>
                                                                            <a href="{{ route('shop.products.show',$product->slug) }}"><span>{{ $product->name }}</span></a>
                                                                        </h1>
                                                                    </td>
                                                                    <td><div class="cost2">€{{ $product->presentPrice() }}</div></td>
                                                                    <td><div class="cost2">{{ $product->pivot->quantity }}</div></td>
                                                                    <td><div class="cost">€{{ $product->subTotalOfItem($product->pivot->quantity) }}</div></td>
                                                                </tr>
                                                            @endforeach

                                                            <tr>
                                                                <td colspan="2">&nbsp</td>
                                                                <td colspan="2"><div class="cost2 text-left">Order subtotal</div></td>
                                                                <td><div class="cost2">€{{ $order->presentSubTotal() }}</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">&nbsp</td>
                                                                <td colspan="2"><div class="cost2 text-left">Tax</div></td>
                                                                <td><div class="cost2">€{{ $order->presentTax() }}</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">&nbsp</td>
                                                                <td colspan="2"><div class="cost2 text-left">Order Total</div></td>
                                                                <td><div class="cost2">€{{ $order->presentTotal() }}</div></td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                    <!--Table products list for small devices-->
                                                    <div class="table-responsive table-none2 wow fadeIn">
                                                        <div class="cat-div  wow fadeIn">
                                                            <h2>
                                                                <div class="save-for-later">
                                                                    <div class="count">{{ $order->products->count() }} item(s) <span>in purchase list</span></div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </h2>
                                                            <div class="clearfix"></div><br>
                                                            @foreach($order->products as $product)
                                                                <table class="table checkout-table">
                                                                    <tr>
                                                                        <td colspan="3" class="text-center">
                                                                            <a href="{{ route('shop.products.show',$product->slug) }}">
                                                                                <img src="{{ secure_asset('storage/'.$product->image) }}" class="img-fluid" alt="{{$product->name}}" title="{{$product->name}}">
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="product-name">
                                                                        <td>
                                                                            <h1>
                                                                                <br><a href="{{ route('shop.products.show',$product->slug) }}"><span>{{ $product->name }}</span></a>
                                                                            </h1>
                                                                        </td>
                                                                        <td><div class="cost2">€{{ $product->presentPrice() }}</div></td>
                                                                        <td><div class="cost2">{{ $product->pivot->quantity }}x</div></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="3"><div class="cost">€{{ $product->subTotalOfItem($product->pivot->quantity) }}</div></td>
                                                                    </tr>
                                                                </table>
                                                                <div class="clearfix"></div><br>
                                                            @endforeach
                                                            <table class="table checkout-table">
                                                                <tr>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <h5>Order subtotal</h5>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class="cost2">€{{ $order->presentSubTotal() }}</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <h5>Tax</h5>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class="cost2">€{{ $order->presentTax() }}</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <h5>Order Total</h5>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class="cost">€{{ $order->presentTotal() }}</div></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="@if($order->different_shipping_address == 1) col-md-6 @else col-md-12 @endif">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab">
                                                        <h3 class="panel-title panel-border-circle">
                                                            <a role="button" data-toggle="collapse" href="#collapseInvoice" aria-expanded="true" class="trigger collapsed">
                                                                Invoice Address
                                                            </a>
                                                        </h3>
                                                    </div>
                                                    <div id="collapseInvoice" class="panel-collapse collapse show" role="tabpanel">
                                                        <div class="panel-body">
                                                            <div class="col-md-12 wow fadeIn">
                                                                <div class="text-color"><strong>Full Name :</strong> {{ $order->billing_fname }} {{ $order->billing_lname }}</div>
                                                                <div class="text-color"><strong>E-mail Address :</strong> {{ $order->billing_email }}</div>
                                                                <div class="text-color"><strong>Address :</strong> {{ $order->billing_address }}, {{ $order->billing_housenumber }}</div>
                                                                <div class="text-color"><strong>City :</strong> {{ $order->billing_city }}, {{ $order->billing_postalcode }}</div>
                                                                <div class="text-color"><strong>Country :</strong> {{ $order->billing_locality }},  {{ $order->billing_country }}</div>
                                                                <div class="text-color"><strong>Phone Number :</strong> {{ $order->billing_phone }}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($order->different_shipping_address == 1)
                                                <div class="col-md-6">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab">
                                                            <h3 class="panel-title panel-border-circle">
                                                                <a role="button" data-toggle="collapse" href="#collapseShipping" aria-expanded="true" class="trigger collapsed">
                                                                    Shipping Address
                                                                </a>
                                                            </h3>
                                                        </div>
                                                        <div id="collapseShipping" class="panel-collapse collapse show" role="tabpanel">
                                                            <div class="panel-body">
                                                                <div class="col-md-12 wow fadeIn">
                                                                    <div class="text-color"><strong>Full Name :</strong> {{ $order->second_billing_fname }} {{ $order->second_billing_lname }} </div>
                                                                    <div class="text-color"><strong>E-mail Address :</strong> {{ $order->second_billing_email }}</div>
                                                                    <div class="text-color"><strong>Address :</strong> {{ $order->second_billing_address }}, {{ $order->second_billing_housenumber }}</div>
                                                                    <div class="text-color"><strong>City :</strong> {{ $order->second_billing_city }}, {{ $order->second_billing_postalcode }}</div>
                                                                    <div class="text-color"><strong>Country :</strong> {{ $order->second_billing_locality }},  {{ $order->second_billing_country }}</div>
                                                                    <div class="text-color"><strong>Phone Number :</strong> {{ $order->second_billing_phone }}</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
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

@endsection
