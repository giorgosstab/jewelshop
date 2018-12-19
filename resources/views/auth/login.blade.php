@extends('shop.main')

@section('title', '| Sign In')

@section('extra-css')
    <style>
        .inner-bg {
            background: url("{{ settingsAdminImageExist(setting('site.login_parallax'),"login") }}") no-repeat center center fixed;
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
                <h3>Sign In</h3>
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
                            <li>Sign In</li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
                @include('shop.messages.error')
                <div class="row">
                    <!--login-left-side-->
                    <div class="col-md-8">
                        <div class="blog-in">
                        {!! Form::open(array('route'=>'login','method' => 'POST','class' => 'form-signin')) !!}
                            {{ csrf_field() }}
                            <div class="text-center mb-4">
                                <h3 class="h2 mb-3 font-weight-normal">{{ __('Sign In User') }}</h3>
                            </div>

                            <div class="form-label-group">
                                {{ Form::email('email', old('email'), array('class' => 'form-control', 'placeholder' => 'Email address', 'id' => 'inputEmail', $errors->has('email') ? ' is-invalid' : '','required', 'autofocus')) }}
                                {{ Form::label('inputEmail', 'E-Mail Address') }}
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" {{ $errors->has('password') ? ' is-invalid' : '' }} required>
                                {{ Form::label('inputPassword', 'Password') }}
                            </div>

                            <div class="checkbox mb-3">
                                <label class="form-check-label" for="remember">

                                    {{--<input type="checkbox" value="remember-me">--}}
                                    {{ Form::checkbox('remember', null, array('id' => 'inputPassword', old('remember') ? 'checked' : '')) }}
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                            {!! Form::button('Sign in',array('class'=>'btn btn-default btn-lg button-1 btn-block', 'type' => 'submit')) !!}
                            <div class="clearfix"> </div><br>
                            <div style="font-size: 12px;">
                                <b>If you did not receive email verification please renew <a href="{{ route('auth.activate.showResendForm') }}"><span style="color: #dfb859">here</span></a></b>
                            </div>
                            <div class="form-group">
                                <div class="boder3"></div>
                                <p>
                                    <center><a href="{{ route('password.request') }}">Forgot Password?</a><center>
                                </p>
                                <div class="boder3"></div>
                            </div>
                            <p class="mt-5 mb-3 text-muted text-center">© 2017 - {{ date('Y') }}</p>
                            Email us if you have login problems :<a href="mailto:{{ setting('site.email') }}"> {{ setting('site.email') }} </a>
                        {{ Form::close() }}
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <!--login-right-side-->
                    <div class="col-md-4 col-12">
                        <div class="blog-in">
                            <div class="mb-4">
                                <h3 class="h2 mb-3 font-weight-normal">As Guest</h3>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="mb-4">
                                <h3 class="h5 mb-3 font-weight-normal"><b>Save time for now.</b></h3>
                                <h3 class="h5 mb-3 font-weight-normal">You dont need account to check out.Buy us guest!</h3>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="mb-4 secure">
                                <a href="{{ route('shop.checkout.index') }}">
                                    Continue as Guest <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                            <div class="clearfix"> </div><br>
                            <div class="clearfix"> </div><br>
                            <div class="mb-4">
                                <h3 class="h2 mb-3 font-weight-normal">New Customer</h3>
                            </div>
                            <div class="mb-4">
                                <h3 class="h5 mb-3 font-weight-normal"><b>Save time for later.</b></h3>
                                <h3 class="h5 mb-3 font-weight-normal">Create an account for fast checkout and easy access to order history!</h3>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="mb-4 secure">
                                <a href="{{ route('register') }}">
                                    Create Account <i class="fa fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--container-->
    <div class="clearfix"></div>
@endsection
