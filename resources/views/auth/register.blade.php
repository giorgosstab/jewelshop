@extends('shop.main')

@section('title', '| Sign Up')

@section('extra-css')

@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="inner-bg">
            <div class="inner-head wow fadeInDown">
                <h3>Sign Up</h3>
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
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
            @include('shop.messages.error')
            <div class="clearfix"> </div>
            {!! Form::open(array('route'=>'register','method' => 'POST','class' => 'form-signup')) !!}
            {{ csrf_field() }}
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
            </form>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!--container-->
    <div class="clearfix"></div>
@endsection
