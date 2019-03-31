@extends('shop.main')

@section('title',  theme('register_title'))

@section('extra-css')
    {!!  GoogleReCaptchaV3::requireJs() !!}
    <style>
        .inner-bg {
            background: url("{{ settingsAdminImageExist(theme('register_parallax'),"register") }}") no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            padding:150px 0
        }
    </style>
@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="inner-bg">
            <div class="inner-head wow fadeInDown">
                <h3>{{ theme('register_title') }}</h3>
            </div>
        </div>
    </section>
    <!--page heading-->
    <div class="blog-bg">
        <!--container-->
        <div class="container">
            <div class="shop-in pl-0 pr-0">
                <div>
                    <div class="bread2">
                        <ul>
                            <li><a href="{{ route('shop.home.index') }}">HOME</a>
                            <li>/</li>
                            <li>{{ theme('register_title') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
                @include('shop.messages.error')
                <div class="row">
                    <!--login-register-side-->
                    <div class="col-md-8">
                        <div class="blog-in">
                            {!! Form::open(array('route'=>'register','method' => 'POST','class' => 'form-signup')) !!}
                                {{ csrf_field() }}
                                {!!  GoogleReCaptchaV3::render('register') !!}
                                <div class="text-center mb-4">
                                    <h3 class="h3 mb-3 font-weight-normal">{{ __('Sign Un New Profile') }}</h3>
                                </div>

                                <div class="form-label-group">
                                    {{ Form::text('name', old('name'), array('class' => 'form-control', 'placeholder' => 'Full Name', 'id' => 'inputName', $errors->has('name') ? ' is-invalid' : '','required', 'autofocus')) }}
                                    {{ Form::label('inputName', 'Full Name') }}
                                </div>

                                <div class="form-label-group">
                                    {{ Form::email('email', old('email'), array('class' => 'form-control', 'placeholder' => 'Email address', 'id' => 'inputEmail', $errors->has('email') ? ' is-invalid' : '','required')) }}
                                    {{ Form::label('inputEmail', 'E-Mail Address') }}
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" {{ $errors->has('password') ? ' is-invalid' : '' }} required>
                                    {{ Form::label('inputPassword', 'Password') }}
                                </div>

                                <div class="form-label-group">
                                    <input type="password" name="password_confirmation" id="inputPasswordConfirmed" class="form-control" placeholder="Re-type Password" required>
                                    {{ Form::label('inputPasswordConfirmed', 'Re-type Password') }}
                                </div>

                            {!! Form::button('Create Acount',array('class'=>'btn btn-default btn-lg button-1 btn-block', 'type' => 'submit')) !!}
                            <div class="clearfix"> </div><br>
                            <div class="form-group">
                                <div class="boder3"></div>
                                <p>
                                    <div style="float:left">
                                        Already have an account? <a href="{{ route('login') }}">Log in</a>
                                    </div>
                                    <a href="{{ route('password.request') }}" style="float:right">Forgot Password?</a>
                                </p>
                                <div class="boder3"></div>
                            </div>
                            <div class="clearfix"> </div><br>
                            <p class="mt-5 mb-3 text-muted text-center">© 2017 - {{ date('Y') }}</p>
                            Email us if you have login problems :<a href="mailto:{{ setting('site.email') }}"> {{ setting('site.email') }} </a>
                            {{ Form::close() }}
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <!--login-right-side-->
                    <div class="col-md-4 col-12">
                        <div class="blog-in">
                            <div class="mb-4">
                                <h3 class="h2 mb-3 font-weight-normal">Benefits</h3>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="mb-4">
                                <h3 class="h5 mb-3 font-weight-normal"><b>Save time for now.</b></h3>
                                <h3 class="h5 mb-3 font-weight-normal">
                                    Creating an account will allow you to <br> checkout faster in the feature, have easy <br> access to order history and customize your <br> experience to suit your preference.
                                </h3>
                            </div>
                            <div class="mb-4">
                                <h3 class="h2 mb-3 font-weight-normal">Terms and Conditions</h3>
                            </div>
                            <div class="mb-4">
                                <h3 class="h5 mb-3 font-weight-normal"><b>By clicking on "Create Acount" you agree to The Company's' Terms and Conditions</b></h3>
                                <h3 class="h5 mb-3 font-weight-normal">
                                    While rare, prices are subject to change based on exchange rate fluctuations - should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price.
                                </h3>
                            </div>
                            <div class="mb-4">
                                <h3 class="h5 mb-3 font-weight-normal">
                                    Should there be an error in the description or <br> pricing of a product, we will provide you with a full refund
                                </h3>
                            </div>
                            <div class="mb-4">
                                <h3 class="h5 mb-3 font-weight-normal">
                                    Acceptance of an order by us is dependent on our <br> suppliers ability to provide the product.
                                </h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--container-->
        <div class="clearfix"></div>
    </div>
@endsection
