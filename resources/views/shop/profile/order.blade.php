@extends('shop.main')

@section('title', '| Profile')

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
    <style>
        /* customer profile*/
        .customer-profile {
            text-align: center;
            background: #f5f5f5;
            border: 1px solid #e9ecef;
            border-bottom: none;
            border-top-left-radius: 1.25rem;
            border-top-right-radius: 1.25rem;
            padding: 2rem
        }

        .customer-image {
            padding: 0.5rem;
            background: #dfb859;
            border: solid 1px rgba(0, 0, 0, 0.125);
            max-width: 10rem;
            margin-bottom: 1.5rem
        }

        .customer-nav .list-group-item {
            border: 1px solid #e9ecef;
            color: #495057;
            font-weight: 500;
            font-size: 0.9rem
        }

        .customer-nav .list-group-item:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .customer-nav .list-group-item:focus,
        .customer-nav .list-group-item:hover {
            background: #dfb859
        }

        .customer-nav .list-group-item .icon,
        .customer-nav .list-group-item .fa {
            margin-right: 0.5rem
        }

        .customer-nav .list-group-item.active {
            background: #dfb859;
            border-color: #dfb859;
            color: #fff
        }
        .customer-nav .list-group-item .badge-pill {
             background: #4c4c4c;
        }
    </style>
    {{ Html::style('https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css') }}
@endsection

@section('content')
    <div id="wrapper">
        <!--page heading-->
        <section>
            <div class="inner-bg1">
                <div class="inner-head wow fadeInDown">
                    <h3>Order #1735</h3><br>
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
                            <li><a href="{{ route('shop.profile.index') }}#order-tab">ORDERS</a></li>
                            <li>/</li>
                            <li>ORDER #1735</li>
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
                                        <p class="text-muted text-small">Ostrava, Czech republic</p>
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
                                    <p><h2>Order #1735 was placed on 22/06/2013 and is currently Being prepared.</h2></p>
                                    <p><h3>If you have any questions, please feel free to <a style="color: #dfb859" href="{{ route('shop.contact.index') }}">contact us</a>, our customer service center is working for you 24/7.</h3></p>
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
                                                            <tr>
                                                                <td class="text-center">
                                                                    <a href="https://jewelshop.io/shop/diamond-ring-16">
                                                                        <img src="https://jewelshop.io/storage/products/dummy/diamond-ring-16.jpg" class="img-fluid" alt="" title="" width="110">
                                                                    </a>
                                                                </td>
                                                                <td class="product-name">
                                                                    <h1>
                                                                        <a href="https://jewelshop.io/shop/diamond-ring-16"><span> DIAMOND RING PRODUCT 16</span></a>
                                                                    </h1>
                                                                </td>
                                                                <td><div class="cost2">€1,366.94</div></td>
                                                                <td><div class="cost2">5</div></td>
                                                                <td><div class="cost">€2,733.88</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <a href="https://jewelshop.io/shop/diamond-ring-16">
                                                                        <img src="https://jewelshop.io/storage/products/dummy/diamond-ring-16.jpg" class="img-fluid" alt="" title="" width="110">
                                                                    </a>
                                                                </td>
                                                                <td class="product-name">
                                                                    <h1>
                                                                        <a href="https://jewelshop.io/shop/diamond-ring-16"><span> DIAMOND RING PRODUCT 16</span></a>
                                                                    </h1>
                                                                </td>
                                                                <td><div class="cost2">€1,366.94</div></td>
                                                                <td><div class="cost2">5</div></td>
                                                                <td><div class="cost">€2,733.88</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">&nbsp</td>
                                                                <td colspan="2"><div class="cost2 text-left">Order subtotal</div></td>
                                                                <td><div class="cost2">€5,366.94</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">&nbsp</td>
                                                                <td colspan="2"><div class="cost2 text-left">Tax</div></td>
                                                                <td><div class="cost2">€1,366.94</div></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">&nbsp</td>
                                                                <td colspan="2"><div class="cost2 text-left">Order Total</div></td>
                                                                <td><div class="cost2">€6,366.94</div></td>
                                                            </tr>
                                                        </table>
                                                    </div>

                                                    <!--Table products list for small devices-->
                                                    <div class="table-responsive table-none2 wow fadeIn">
                                                        <div class="cat-div  wow fadeIn">
                                                            <h2>
                                                                <div class="save-for-later">
                                                                    <div class="count">2 item(s) <span>in purchase list</span></div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </h2>
                                                            <div class="clearfix"></div><br>
                                                            <table class="table checkout-table">
                                                                <tr>
                                                                    <td colspan="3" class="text-center">
                                                                        <a href="https://jewelshop.io/shop/diamond-ring-16">
                                                                            <img src="https://jewelshop.io/storage/products/dummy/diamond-ring-16.jpg" class="img-fluid" alt="" title="">
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="product-name">
                                                                    <td>
                                                                        <h1>
                                                                            <br><a href="https://jewelshop.io/shop/diamond-ring-16"><span> DIAMOND RING PRODUCT 16</span></a>
                                                                        </h1>
                                                                    </td>
                                                                    <td><div class="cost2">€1,366.94</div></td>
                                                                    <td><div class="cost2">5x</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3"><div class="cost">€2,733.88</div></td>
                                                                </tr>
                                                            </table>
                                                            <div class="clearfix"></div><br>
                                                            <table class="table checkout-table">
                                                                <tr>
                                                                    <td colspan="3" class="text-center">
                                                                        <a href="https://jewelshop.io/shop/diamond-ring-16">
                                                                            <img src="https://jewelshop.io/storage/products/dummy/diamond-ring-16.jpg" class="img-fluid" alt="" title="">
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="product-name">
                                                                    <td>
                                                                        <h1>
                                                                            <br><a href="https://jewelshop.io/shop/diamond-ring-16"><span> DIAMOND RING PRODUCT 16</span></a>
                                                                        </h1>
                                                                    </td>
                                                                    <td><div class="cost2">€1,366.94</div></td>
                                                                    <td><div class="cost2">5</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3"><div class="cost">€2,733.88</div></td>
                                                                </tr>
                                                            </table>

                                                            <div class="clearfix"></div><br>
                                                            <table class="table checkout-table">
                                                                <tr>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <h5>Order subtotal</h5>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class="cost2">€5,366.94</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <h5>Tax</h5>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class="cost2">€1,366.94</div></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="text-center">
                                                                            <h5>Order Total</h5>
                                                                        </div>
                                                                    </td>
                                                                    <td><div class="cost">€6,366.94</div></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
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
                                                                <div class="text-color"><strong>Full Name :</strong> Giorgos tsaxrelias</div>
                                                                <div class="text-color"><strong>E-mail Address :</strong> tsaxre1991@hotmail.com</div>
                                                                <div class="text-color"><strong>Address :</strong> Menelaou, 4</div>
                                                                <div class="text-color"><strong>City :</strong> Aigio, 25100</div>
                                                                <div class="text-color"><strong>Country :</strong> Axaias, GREECE</div>
                                                                <div class="text-color"><strong>Phone Number :</strong> 6995834102</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                                                <div class="text-color"><strong>Full Name :</strong> Panos Papadopoulos</div>
                                                                <div class="text-color"><strong>E-mail Address :</strong> panospapa@hotmail.com</div>
                                                                <div class="text-color"><strong>Address :</strong> Trikoupi, 124</div>
                                                                <div class="text-color"><strong>City :</strong> Patra, 33100</div>
                                                                <div class="text-color"><strong>Country :</strong> Axaias, GREECE</div>
                                                                <div class="text-color"><strong>Phone Number :</strong> 6908634501</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        </div>
        <div class="clearfix"></div>
    </div>
@endsection

@section('extra-script')
    {{ Html::script('https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js') }}
    <script>
        $(document).ready( function () {
            $('#dataTable').DataTable();
        } );
    </script>
@endsection
