@extends('shop.main')

@section('title', theme('blog_title'))

@section('extra-css')
    <style>
        .blog {
            background: url("{{ settingsAdminImageExist(theme('blog_parallax'),"blog") }}") no-repeat center top fixed;
            padding:150px 0
        }
    </style>
@endsection

@section('content')
    <!--page heading-->
    <section>
        <div class="blog">
            <div class="inner-head wow fadeInDown">
                <h3>{{ theme('blog_title') }}</h3>
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
                        <li><a href="{{ route('shop.home.index') }}">{{ theme('home_title') }}</a>
                        <li>/</li>
                        <li>{{ theme('blog_title') }}</li>
                    </ul>
                </div>
                <!--breadcrumbs -->
                <div class="clearfix"> </div>
                <div class="row">
                    <!--Blog-left-side-->
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 select-p">
                                <select id="sorting" class="selectpicker select-1" data-style="btn-primary">
                                    <option {{ request()->sort == "new" ? 'selected' : '' }} value="newest">Date Added: Latest First</option>
                                    <option {{ request()->sort == "old" ? 'selected' : '' }} value="oldest">Date Added: Oldest First</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 bread">
                                <div class="breadcrumbs">
                                    {{ $posts->appends(request()->input())->render('pagination::shopPagination') }}
                                </div>
                            </div>
                        </div>
                        @foreach($posts as $post)
                            <div class="blog-in {{ $loop->first ? 'blog-spa' : '' }}">
                                <div class="clearfix"></div>
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
                                    <div class="blog-text">
                                        <p> {{ $post->excerpt }}</p>
                                    </div>
                                    <div class="pull-left">
                                        <div class="share2">
                                            <a href="#" onclick="window.open('//www.facebook.com/sharer/sharer.php?u={{ url("/blog/".$post->slug) }}','newwindow','width=600,height=400');return false;" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#" onclick="window.open('//twitter.com/home?status={{ url("/blog/".$post->slug) }}','newwindow','width=600,height=400');return false;" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#" onclick="window.open('//pinterest.com/pin/create/button/?url={{ url("/blog/".$post->slug) }}','newwindow','width=600,height=400');return false;" class="icoGoogle" title="pinterest+"><i class="fa fa-pinterest"></i></a>
                                            <a href="#" onclick="window.open('//reddit.com/submit?url={{ url("/blog/".$post->slug) }}','newwindow','width=600,height=400');return false;" class="icoGoogle" title="Reddit"><i class="fa fa-reddit"></i></a>
                                            <a href="#" onclick="window.open('//vkontakte.ru/share.php?url={{ url("/blog/".$post->slug) }}','newwindow','width=600,height=400');return false;" class="icoGoogle" title="VK"><i class="fa fa-vk"></i></a>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('shop.blog.show', $post->slug) }}" class="link-txt">CONTINUE READING <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div><br>
                        @endforeach

                        <div class="older-posts wow fadeInDown">
                            <h1>Older Posts</h1>
                            <div id="myCarousel" class="carousel slide">
                                <!-- Carousel items -->
                                <div class="posts-arrow"> <a class="" href="#myCarousel" data-slide="prev">‹</a> <a class="" href="#myCarousel" data-slide="next">›</a> </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col col-xs-6 col-sm-6 col-lg-4 posts-title ">
                                                <div> <a href="#"><img  src="{{ secure_asset('assets/images/releted-img.jpg') }}" alt="" title="" class="img-fluid"></a> </div>
                                                <h4><a href="product.html">Neque porro quisquam</a> </h4>
                                                <p>March 31, 2018</p>
                                            </div>
                                            <div class="col  col-xs-6 col-sm-6 col-lg-4 posts-title">
                                                <div> <a href="#"><img  src="{{ secure_asset('assets/images/releted-img2.jpg') }}" alt="" title="" class="img-fluid"></a> </div>
                                                <h4><a href="product.html">Neque porro quisquam</a> </h4>
                                                <p>March 31, 2018</p>
                                            </div>
                                            <div class="col  col-xs-6 col-sm-6 col-lg-4 posts-title scroll-n">
                                                <div> <a href="#"><img  src="{{ secure_asset('assets/images/releted-img3.jpg') }}" alt="" title="" class="img-fluid"></a> </div>
                                                <h4><a href="product.html">Neque porro quisquam</a> </h4>
                                                <p>March 31, 2018</p>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <!--/item-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col col-xs-6 col-sm-6 col-lg-4 posts-title">
                                                <div> <a href="#"><img  src="{{ secure_asset('assets/images/releted-img4.jpg') }}" alt="" title="" class="img-fluid"></a> </div>
                                                <h4><a href="product.html">Neque porro quisquam</a> </h4>
                                                <p>March 31, 2018</p>
                                            </div>
                                            <div class="col col-xs-6 col-sm-6 col-lg-4 posts-title">
                                                <div> <a href="#"><img  src="{{ secure_asset('assets/images/releted-img5.jpg') }}" alt="" title="" class="img-fluid"></a> </div>
                                                <h4><a href="product.html">Neque porro quisquam</a> </h4>
                                                <p>March 31, 2018</p>
                                            </div>
                                            <div class="col col-xs-6 col-sm-6 col-lg-4 posts-title scroll-n">
                                                <div> <a href="#"><img  src="{{ secure_asset('assets/images/releted-img6.jpg') }}" alt="" title="" class="img-fluid"></a> </div>
                                                <h4><a href="product.html">Neque porro quisquam</a> </h4>
                                                <p>March 31, 2018</p>
                                            </div>
                                        </div>
                                        <!--/row-->
                                    </div>
                                    <!--/item-->

                                </div>
                                <!--/carousel-inner-->
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
                                        @foreach($popularPosts as $post)
                                            <div class="col-lg-4 col-4"> <img  src="{{ secure_asset('storage/'.$post->image) }}" alt="" title="" class="img-fluid"> </div>
                                            <div class="col-lg-8 col-8 p-0">
                                                <h4><a href="{{ route('shop.blog.show', $post->slug) }}">{{ $post->title }}</a></h4>
                                                <p>{{ $post->created_at->format('jS F Y') }}</p>
                                            </div>
                                            <div class="clearfix"></div>
                                            @if(!$loop->last)
                                                <div class="col-md-12">
                                                    <hr>
                                                </div>
                                                <div class="clearfix"></div>
                                            @endif
                                        @endforeach
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
                                                    @foreach($blogCategories as $category)
                                                        <li><a href="{{ route('shop.blog.index', 'category='.$category->slug) }}"><span class="glyphicon glyphicon-menu-right"></span> {{ $category->name }} </a></li>
                                                    @endforeach
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
                                        <div class="col-md-12 text-center"> <img  src="{{ secure_asset('assets/images/add.jpg') }}" alt="" title="" class="img-fluid">
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
                                                    @foreach($tags as $tag)
                                                        <li><a href="{{ route('shop.blog.index', 'tag='.$tag->slug) }}" title="{{ $tag->name }}"><i class="fa fa-tag"></i> {{ $tag->name }} </a></li>
                                                    @endforeach
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
@endsection

@section('extra-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sorting').bind('change', function () {
                var value = this.value;

                if (value == "newest"){
                    window.location.href = "{!! route('shop.blog.index', appendUrlParams(['sort' => 'new']) ) !!}";
                }
                if (value == "oldest"){
                    window.location.href = "{!! route('shop.blog.index', appendUrlParams(['sort' => 'old']) ) !!}";
                }
            });
        });
    </script>
@endsection
