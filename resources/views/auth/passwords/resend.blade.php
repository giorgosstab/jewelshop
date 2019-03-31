@extends('shop.main')

@section('title', theme('resend_title'))

@section('extra-css')
    <style>
        .inner-bg {
            background: url("{{ settingsAdminImageExist(theme('resend_parallax'),"resend_activation") }}") no-repeat center center fixed;
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
                <h3>{{ theme('resend_title') }}</h3>
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
                        <li>{{ theme('resend_title') }}</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
            @include('shop.messages.error')
            <div class="clearfix"> </div>
            {!! Form::open(array('route'=>'auth.activate.showResendForm','method' => 'POST','class' => 'form-resetPass')) !!}
            {{ csrf_field() }}
            <div class="text-center mb-4">
                <h3 class="h3 mb-3 font-weight-normal">{{ __('Resend Activation') }}</h3>
            </div>

            <div class="form-label-group">
                {{ Form::email('email', old('email'), array('class' => 'form-control', 'placeholder' => 'Email address', 'id' => 'inputEmail', $errors->has('email') ? ' is-invalid' : '','required', 'autofocus')) }}
                {{ Form::label('inputEmail', 'E-Mail Address') }}
            </div>

            {!! Form::button('Resend',array('class'=>'btn btn-default btn-lg button-1 btn-block', 'type' => 'submit')) !!}
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
