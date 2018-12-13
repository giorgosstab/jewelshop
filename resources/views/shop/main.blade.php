<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ setting('site.description') }}">
        <meta name="author" content="{{ setting('site.title') }}">
        <link rel="shortcut icon" type="image/x-icon" href="{{ secure_asset('storage/'.jsonDecode(setting('site.favicon'))) }}">

        <title>{{ config('app.name', 'JewelShop') }} @yield('title' , '')</title>
        <!--all-->
        {{ Html::style('assets/css/mega-menu.css') }}
        {{ Html::style('assets/css/default.css') }}

        <!--animate-->
        {{ Html::style('assets/css/animate.css') }}

        <!-- CSS STYLE-->
        {{ Html::style('assets/slider/css/style.css') }}
        {{ Html::style('assets/css/custom.css') }}
        <!--extra css-->
        @yield('extra-css')

        <!--library js-->
        {{ Html::script('assets/js/jquery.js') }}

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        {{Html::script('assets/slider/js/jquery.themepunch.plugins.min.js')}}
        {{Html::script('assets/slider/js/jquery.themepunch.revolution.min.js')}}
    </head>
    <body class="top-body">
        <div id="preloader"></div>
        <!--modal popup-->
        @include('shop.layouts.modals')
        <!--nav-->
        @include('shop.layouts.navbar')

        @yield('content')
        
        <!--footer-->
        @include('shop.layouts.footer')

        <p data-toggle="modal" class="no-margin" data-target="#myModal" id="model2"></p>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span> <span class="sr-only">Close</span> </button>
                        <h4 class="modal-title">&nbsp;</h4>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <h1 class="modal-title text-center">Thank You</h1>
                        <form class="form-horizontal">
                        <h4 class="text-center">We will get back to you as soon as possible.</h4>
                        </form>
                    </div>
                    <!-- Modal Footer -->
                </div>
            </div>
        </div>
        <!--owlcarousel-Best Of Our Store and Popular Brands -->
        {{ Html::script('assets/js/carousel/owlcarousel/owl.carousel.js') }}
        {{ Html::script('assets/js/owl-carousel.js') }}

        <!--scrolltop-->
        {{ Html::script('assets/js/scrolltopcontrol.js') }}

        <!--themes js-->
        {{ Html::script('assets/js/ajax.js') }}
        {{ Html::script('assets/js/formValidation.js') }}

        <!--searchbar-->
        {{ Html::script('assets/js/popper.min.js') }}
        {{ Html::script('assets/js/bootstrap.min.js') }}

        <!--all script-->
        {{ Html::script('assets/js/grayscale.min.js') }}
        {{ Html::script('assets/js/home-2.js') }}
        
        <!--wow animate-->
        {{ Html::script('assets/js/wow.min.js') }}
        {{ Html::script('assets/js/animate1.js') }}

        <!--hidden input file-->
        <script>
            $(document).ready(function() {
                $(".change").on('click', function(e){
                    e.preventDefault();
                    $(".upload-field:hidden").trigger('click');
                });
            });
        </script>
        <!--animate fade messages-->
        <script>
            $("#message").fadeTo(4000, 1000).slideUp(500, function(){
                $("#message").slideUp(5000);
            });
            $('.navbar-nav .dropdown > a').click(function() {
                location.href = this.href;
            });
        </script>
        
        <!--extra script-->
        @yield('extra-script')
    </body>
</html>
