@extends('shop.main')

@section('title', '| '.$post->title)

@section('extra-css')
    <style>
        .blog {
            background: url("{{ settingsAdminImageExist(setting('site.blog_parallax'),"blog") }}") no-repeat center top fixed;
            padding:150px 0
        }
    </style>
@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="blog">
            <div class="inner-head wow fadeInDown">
                <h3>Blog Details</h3>
            </div>
        </div>
    </section>
    <!--page heading-->
    <div class="blog-bg">
        <div class="container">
            <div class="shop-in pl-0 pr-0">
                <!--breadcrumbs -->
                <div class="bread2">
                    <ul>
                        <li><a href="{{ route('shop.home.index') }}">HOME</a>
                        <li>/</li>
                        <li><a href="{{ route('shop.blog.index') }}">BLOG</a>
                        <li>/</li>
                        <li>{{ $post->title }}</li>
                    </ul>
                </div>
                <!--breadcrumbs -->
                <div class="clearfix"> </div>
                <div class="row">
                    <!--Blog-left-side-->
                    <div class="col-md-8">
                        <div class="blog-in">
                            <div class="wow fadeIn">
                                <h1>{{ $post->title }}</h1>
                                <ul class="comm-date">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;{{ $post->created_at->format('jS F Y') }} </li>
                                    <li>|</li>
                                    <li> <span><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp; by {{ $post->author->name }}</span> </li>
                                    <li>|</li>
                                    <li><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp; No Comments</li>
                                </ul>
                                <div><img  src="{{ secure_asset('storage/'.$post->image) }}" alt="" title="" class="img-fluid"></div>
                            </div>
                            <div class="blog-text wow fadeIn">
                                {!! $post->body !!}
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Blog-left-side-->
                    <!--Blog-right-side-->
                    <div class="col-md-4 col-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
                                <div class="blog-right wow fadeIn">
                                    <h1>POPULAR POSTS</h1>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-lg-4 col-4"> <img  src="assets/images/post-1.jpg" alt="" title="" class="img-fluid"> </div>
                                        <div class="col-lg-8 col-8 p-0">
                                            <h4><a href="product.html">Neque porro quisquam est qui dolorem</a></h4>
                                            <p>March 31, 2018</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-4 col-4"> <img  src="assets/images/post-2.jpg" alt="" title="" class="img-fluid"> </div>
                                        <div class="col-lg-8 col-8 p-0">
                                            <h4><a href="product.html">Neque porro quisquam est qui dolorem</a></h4>
                                            <p>March 31, 2018</p>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12">
                                            <hr>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-lg-4 col-4"> <img  src="assets/images/post-3.jpg" alt="" title="" class="img-fluid"> </div>
                                        <div class="col-lg-8 col-8 p-0">
                                            <h4><a href="product.html">Neque porro quisquam est qui dolorem</a></h4>
                                            <p>March 31, 2018</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-6">
                                <div class="blog-right wow fadeIn">
                                    <h1>Categories</h1>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="cat-list">
                                                <ul>
                                                    <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Lorem ipsum </a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Lorem ipsum </a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Lorem ipsum </a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Lorem ipsum </a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Lorem ipsum </a></li>
                                                    <li><a href="#"><span class="glyphicon glyphicon-menu-right"></span> Lorem ipsum </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-6">
                                <div class="blog-right wow fadeIn">
                                    <h1>ADVERTISING SECTION</h1>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-12 text-center"> <img  src="assets/images/add.jpg" alt="" title="" class="img-fluid">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-6">
                                <div class="blog-right wow fadeIn">
                                    <h1>Popular tags</h1>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tag-list">
                                                <ul>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> corporate </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> theme </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> css3 </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> premium </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> html5 </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> business </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> all purpose </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> Js </a></li>
                                                    <li><a href="#" class="#" title="Tags"><i class="fa fa-tag"></i> muse </a></li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--Blog-right-side-->
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
@endsection
