@extends('shop.main')

@section('title', '| Sign In')

@section('extra-css')

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
            <div class="clearfix"> </div>
            {!! Form::open(array('route'=>'login','method' => 'POST','class' => 'form-signin')) !!}
                {{ csrf_field() }}
                <div class="text-center mb-4">
                    <h3 class="h3 mb-3 font-weight-normal">{{ __('Sign In User') }}</h3>
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
                <div class="form-group">
                    <div class="boder3"></div>
                    <p>
                        <a href="{{ route('register') }}" style="float:left">Register New Account?</a>
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
        <div class="clearfix"></div>
    </div>
    <!--container-->
    <div class="clearfix"></div>
@endsection
