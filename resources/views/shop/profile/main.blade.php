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
                    <h3>Profile</h3>
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
                            <li>PROFILE</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
                @include('shop.messages.error')
                <div class="clearfix"> </div><br>
                <div class="row">
                    <!--left-side-->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-md-12">
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
                                        <a href="#order-tab" data-toggle="pill" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-shopping-bag"></span>Orders</span><small class="badge badge-pill badge-primary">{{ $user->orders()->count() }}</small></a>
                                        <a href="#profile-tab" data-toggle="pill" class="active list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-user"></span>Profile</span></a>
                                        <a href="#addresses-tab" data-toggle="pill" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-map-o"></span>Addresses</span></a>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-pill').submit();" class="list-group-item d-flex justify-content-between align-items-center"><span><span class="fa fa-sign-out"></span>Log out</span></a>
                                        <form id="logout-form-pill" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
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
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="order-tab">
                                        <table class="table table-hover table-responsive-md" id="dataTable">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Total</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($user->orders as $order)
                                                    <tr>
                                                        <th># {{ $order->id }}</th>
                                                        <td>{{ $order->created_at->format('j F Y') }}</td>
                                                        <td>€{{ $order->presentTotal() }}</td>
                                                        <td>
                                                            @if($order->status == 'PENDING')
                                                                <span class="badge badge-primary">{{ $order->status }}</span>
                                                            @endif
                                                            @if($order->status == 'CONFIRMED')
                                                                <span class="badge badge-info">{{ $order->status }}</span>
                                                            @endif
                                                            @if($order->status == 'PAIDED')
                                                                <span class="badge badge-dark">{{ $order->status }}</span>
                                                            @endif
                                                            @if($order->status == 'SENTED')
                                                                <span class="badge badge-success">{{ $order->status }}</span>
                                                            @endif
                                                            @if($order->status == 'CANCELLED')
                                                                <span class="badge badge-danger">{{ $order->status }}</span>
                                                            @endif
                                                        </td>
                                                        <td><a href="{{ route('shop.order.customerShow', $order->unique_id) }}" class="btn btn-default button-1 btn-sm">View</a></td>
                                                    </tr>
                                                @endforeach
                                                {{--<tr>--}}
                                                    {{--<th># 1734</th>--}}
                                                    {{--<td>7/5/2017</td>--}}
                                                    {{--<td>$150.00</td>--}}
                                                    {{--<td><span class="badge badge-warning">Action needed</span></td>--}}
                                                    {{--<td><a href="#" class="btn btn-default button-1 btn-sm">View</a></td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<th># 1730</th>--}}
                                                    {{--<td>30/9/2016</td>--}}
                                                    {{--<td>$150.00</td>--}}
                                                    {{--<td><span class="badge badge-success">Received</span></td>--}}
                                                    {{--<td><a href="#" class="btn btn-default button-1 btn-sm">View</a></td>--}}
                                                {{--</tr>--}}
                                                {{--<tr>--}}
                                                    {{--<th># 1705</th>--}}
                                                    {{--<td>22/6/2016</td>--}}
                                                    {{--<td>$150.00</td>--}}
                                                    {{--<td><span class="badge badge-danger">Cancelled</span></td>--}}
                                                    {{--<td><a href="#" class="btn btn-default button-1 btn-sm">View</a></td>--}}
                                                {{--</tr>--}}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show active" id="profile-tab">
                                        <div class="collapse-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab">
                                                    <h3 class="panel-title panel-border-circle">
                                                        <a role="button" data-toggle="collapse" href="#collapsePassword" aria-expanded="true" class="trigger collapsed">
                                                            Change Password
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapsePassword" class="panel-collapse collapse show" role="tabpanel">
                                                    <div class="panel-body">
                                                        {!! Form::open(['method' => 'POST','route' => 'shop.profile.updatePassword']) !!}
                                                            @method('PATCH')
                                                            {{ csrf_field() }}
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-md-offset-6">
                                                                    <input type="password" id="old_password" name="old_password" placeholder="Old Password">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <input type="password" id="password" name="password" placeholder="New Paswword">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Retype New Password">
                                                                </div>
                                                            </div>
                                                            <div class="sub-bt">
                                                                <button class="submit-css" type="submit">SAVE PASSWORD <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                                            </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab">
                                                    <h3 class="panel-title panel-border-circle">
                                                        <a role="button" data-toggle="collapse" href="#collapseDetails" aria-expanded="true" class="trigger collapsed">
                                                            Personal Details
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapseDetails" class="panel-collapse collapse show" role="tabpanel">
                                                    <div class="panel-body">
                                                        {!! Form::open(['method' => 'POST','route' => 'shop.profile.updateDetails']) !!}
                                                        @method('PATCH')
                                                        {{ csrf_field() }}
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" id="name" name="name" placeholder="Full Name" value="{{ old('name', $user->name) }}">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" id="email" name="email" placeholder="E-mail" value="{{ old('email', $user->email) }}">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone', !empty($user->userDetail->phone) ? $user->userDetail->phone : '') }}">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" id="company" name="company" placeholder="Company Name" value="{{ old('company', !empty($user->userDetail->company) ? $user->userDetail->company : '') }}">
                                                                </div>
                                                            </div>
                                                            <div class="sub-bt">
                                                                <button class="submit-css" type="submit">SAVE CHANGES <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                                            </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="addresses-tab">
                                        <div class="collapse-group">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab">
                                                    <h3 class="panel-title panel-border-circle">
                                                        <a role="button" data-toggle="collapse" href="#collapseAddress" aria-expanded="true" class="trigger collapsed">
                                                            Invoice address
                                                        </a>
                                                    </h3>
                                                </div>
                                                <div id="collapseAddress" class="panel-collapse collapse show" role="tabpanel">
                                                    <div class="panel-body">
                                                        {!! Form::open(['method' => 'POST','route' => 'shop.profile.updateAddresses']) !!}
                                                            @method('PATCH')
                                                            {{ csrf_field() }}
                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                    <input type="text" id="city" name="city" placeholder="City" value="{{ old('city', !empty($user->userDetail->city) ? $user->userDetail->city : '') }}">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <select class="js-countries" name="country">
                                                                        <option value="" disabled="" selected="selected">Please select your country</option>
                                                                        <option @if(!empty($user->userDetail->country))@if($user->userDetail->country == 'GREECE'){{ 'selected' }}@else{{ old('country') == 'GREECE' ? 'selected' : '' }}@endif @endif value="GREECE">GREECE </option>
                                                                        <option @if(!empty($user->userDetail->country))@if($user->userDetail->country == 'CYPRUS'){{ 'selected' }}@else{{ old('country') == 'CYPRUS' ? 'selected' : '' }}@endif @endif value="CYPRUS">CYPRUS </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-8">
                                                                    <input type="text" id="address" name="address" placeholder="Address" value="{{ old('address', !empty($user->userDetail->address) ? $user->userDetail->address : '') }}">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <input type="number" id="house_number" name="house_number" placeholder="House Number" value="{{ old('house_number', !empty($user->userDetail->house_number) ? $user->userDetail->house_number : '') }}">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-4">
                                                                    <input type="text" id="postal_code" name="postal_code" placeholder="Postal Code" value="{{ old('postal_code', !empty($user->userDetail->postal_code) ? $user->userDetail->postal_code : '') }}">
                                                                </div>
                                                                <div class="form-group col-md-8">
                                                                    <input type="text" id="locality" name="locality" placeholder="Locality" value="{{ old('locality', !empty($user->userDetail->locality) ? $user->userDetail->locality : '') }}">
                                                                </div>
                                                            </div>
                                                            <div class="sub-bt">
                                                                <button class="submit-css" type="submit">SAVE CHANGES <i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                                                            </div>
                                                        {!! Form::close() !!}
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

            let url = document.location.toString();
            if (url.match('#')) {
                let splitText = url.split('#')[1];
                let href = $('.customer-nav a[href=#' + splitText + ']');
                $(href).tab('show') ;
            }
        });
    </script>
@endsection
