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

        <title>{{ config('app.name') }} | @yield('title') </title>
        <!--all-->
        {{ Html::style('assets/css/mega-menu.css') }}
        {{ Html::style('assets/css/default.css') }}

        <!--animate-->
        {{ Html::style('assets/css/animate.css') }}

        <!-- CSS STYLE-->
        {{ Html::style('assets/slider/css/style.css') }}
        {{ Html::style('assets/css/custom.css') }}

        <!--instagram feed-->
        {{ Html::style('assets/css/instagramfeed/custom.instagram.css') }}

        <!--extra css-->
        @yield('extra-css')

        <!--library js-->
        {{ Html::script('assets/js/jquery.js') }}

        <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
        {{Html::script('assets/slider/js/jquery.themepunch.plugins.min.js')}}
        {{Html::script('assets/slider/js/jquery.themepunch.revolution.min.js')}}

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ setting('site.google_analytics_tracking_id') }}');
        </script>

        <!-- Global site tag (adsbygoogle.js) - Google Adsense -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-8642153110066826",
                enable_page_level_ads: true
            });
        </script>

        {{--mine instagram hover--}}
        {{--<style>--}}
            {{--.instaimg img{margin-bottom: 30px;}--}}
            {{--.instaimg img:hover{--}}
                {{--opacity:0.4;--}}
                {{----moz-opacity:0.4;--}}
                {{----moz-opacity:0.4;--}}
                {{----webkit-opacity:0.4;--}}
            {{--}--}}
        {{--</style>--}}
        {!! theme('top_navbar_color') ? '<style>.top-bar {background:'.theme('top_navbar_color'). '!important;}</style>' : ''!!}
        {!! theme('middle_navbar_color') ? '<style>.top-bar1 ul{display: flex !important}.top-bar1 ul>li, .top-bar1, .top-bar2{background:'.theme('middle_navbar_color'). '!important;}</style>' : ''!!}
        {!! theme('bottom_navbar_color') ? '<style>.navbar-fixed-top2 {padding:0;background:'.theme('bottom_navbar_color'). '!important;}</style>' : ''!!}
        {!! theme('main_color') ?
            '<style>
                .cart-btn a.button.adc:before {background:'.theme('main_color').';}
                .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
		            background:'.theme('main_color').'!important;
                }
                .navbar-light .navbar-nav .nav-link:hover {background:'.theme('main_color').'!important;}
                .opacitybox > div {border: 1px solid '.theme('main_color').'!important;}
                .tp-caption.middle_yellow {color: '.theme('main_color').'!important;}
                .View-all a{background:'.theme('main_color').';}
                .right-img img { border: solid 8px '.theme('main_color').';}
                .title-heading, .title-heading h3 { border: 2px solid '.theme('main_color').'; !important}
                .owl-next {background: url('.secure_asset('assets/js/carousel/owlcarousel/assets/next.png').') no-repeat center center '.theme('main_color').'!important;}
                .owl-prev {background: url('.secure_asset('assets/js/carousel/owlcarousel/assets/prev.png').') no-repeat center center '.theme('main_color').'!important;}
                .price{color: '.theme('main_color').'!important}
                .our-store:hover {background:'.theme('main_color').'!important; opacity:0.9;}
                .owl-item-boder {border: solid 1px '.theme('main_color').'!important}
                .category-in li h2 {background: '.theme('main_color').'!important}
                .zoom-hover .glyphicon-search {color:'.theme('main_color').'!important}
                .carousel-control {color: '.theme('main_color').'!important}
                figure.effect-apollo p{border-right:4px solid '.theme('main_color').'!important}
                .newsletter .container {background: '.theme('main_color').' none repeat scroll 0 0;}
                .footer-address ul li .fa {color: '.theme('main_color').'!important}
                .copyright a {color: '.theme('main_color').'!important}
                .specific-content h5 {color: '.theme('main_color').'!important}
                .clients-name {color: '.theme('main_color').'!important}
                .breadcrumbs li .active {border-bottom: solid 2px '.theme('main_color').'!important;}
                .breadcrumbs li a:hover {border-bottom:solid 2px '.theme('main_color').'!important}
                .breadcrumbs li a:focus {border-bottom:solid 2px '.theme('main_color').'!important}
                .pagination span {color: '.theme('main_color').'!important}
                .filter2 {background: '.theme('main_color').'}
                .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-button, html .ui-button.ui-state-disabled:hover, html .ui-button.ui-state-disabled:active {
                    border: 1px solid '.theme('main_color').'!important;
	                background: '.theme('main_color').'!important;
                }
                .name-pro span {color: '.theme('main_color').'!important}
                .product-hover div {border: 1px solid '.theme('main_color').'!important;}
                .rate-css span {color: '.theme('main_color').'!important;}
                .AlsoLike-border:hover {outline: solid 3px '.theme('main_color').'!important;}
                .share2 a:hover {color: '.theme('main_color').'!important;}
                .posts-arrow a {background: '.theme('main_color').';}
                .blog-right h4 a:hover { color:'.theme('main_color').'!important;}
                .cat-list li a:hover { color:'.theme('main_color').'!important;}
                .tag-list li a {background: '.theme('main_color').';}
                .continue2 {border-bottom: 3px solid '.theme('main_color').';}
                .continue2:hover {background: '.theme('main_color').';border-bottom:3px solid '.theme('main_color').';}
                .list-div li span {color: '.theme('main_color').'!important;}
                .price-2 li span {color: '.theme('main_color').'!important;}
                .price-2 a:hover {color:'.theme('main_color').'!important;}
                .product-info h6 span {color:'.theme('main_color').'!important;}
                .dropdown-item.active, .dropdown-item:active {background-color:'.theme('main_color').'!important;}
                .dropdown-item:focus, .dropdown-item:hover {background-color:'.theme('main_color').'!important;}
                .bread2 li a:hover {color:'.theme('main_color').'!important;}
                .navbar .dropdown-menu.mega-menu .sub-menu a.menu-item:hover {
                    color: '.theme('main_color').' !important;
                }
                .submit-css {border:solid 2px '.theme('main_color').' !important;}
                .check-ct { background:'.theme('main_color').';}
                .product-name a:hover {color: '.theme('main_color').' !important;}
                .remove-css a:hover { color:'.theme('main_color').' !important;;}
                .cost {background:'.theme('main_color').';}
                .secure a {background:'.theme('main_color').';}
                .apply:hover {background:'.theme('main_color').';}
                .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
                    background-image: -webkit-linear-gradient(330deg, '.theme('main_color').' 0%, #5f5f5f 100%);
                    background-image: linear-gradient(120deg, '.theme('main_color').' 0%, #5f5f5f 100%);
                }
                .cart-btn .badge { background: '.theme('main_color').'}
                .badge-count { background: '.theme('main_color').'}
                .rate-css2 {background: '.theme('main_color').'}
                .panel-border-circle a{background: '.theme('main_color').';border-color:rgba(0,0,0, 0.3);}
                .ship2 a {color: '.theme('main_color').' !important;}
                .buy-this button {border: solid 2px '.theme('main_color').';}
                .customer-image {background: '.theme('main_color').'}
                .customer-nav .list-group-item.active {background: '.theme('main_color').';border-color: '.theme('main_color').';}
                .customer-nav .list-group-item:hover, .customer-nav .list-group-item:focus {background: '.theme('main_color').';border-color: '.theme('main_color').';}
                .thanks-text a {border: solid 2px '.theme('main_color').';}
                .button-1 {background: '.theme('main_color').'}
                .tab-pane h3 a span.contact {color: '.theme('main_color').' !important;}
            </style>' : ''!!}
    </head>
    <body class="top-body">
        <div id="preloader"></div>
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

        <!--searchbar-->
        {{ Html::script('assets/js/popper.min.js') }}
        {{ Html::script('assets/js/bootstrap.min.js') }}

        <!--all script-->
        {{ Html::script('assets/js/grayscale.min.js') }}
        {{ Html::script('assets/js/home-2.js') }}
        
        <!--wow animate-->
        {{ Html::script('assets/js/wow.min.js') }}
        {{ Html::script('assets/js/animate1.js') }}

        <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
        {{ Html::script('https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js') }}
        {{ Html::script('https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js') }}
        {{ Html::script('js/algolia.js') }}

        <!--instagram feed-->
        {{ Html::script('assets/js/instagramfeed/instafeed.min.js') }}
        {{ Html::script('assets/js/instagramfeed/custom.instagram.js') }}
        {{ Html::script('assets/js/instagramfeed/lightwidget.instagram.js') }}

        <!--nav bar small devices-->
        {{ Html::script('assets/js/navbar/clickable.navbar.js') }}

        <script type="text/javascript" src="https://downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script>
        <script type="text/javascript">
            window.dojoRequire(["mojo/signup-forms/Loader"], function(L) {
                L.start({"baseUrl":"mc.us20.list-manage.com","uuid":"75ae64ec7c9d1dd64ea2fc91e","lid":"d7ce10dc96","uniqueMethods":true})
            })
        </script>

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
        </script>

        <!--extra script-->
        @yield('extra-script')
    </body>
</html>
