@extends('shop.main')

@section('title', '| Blog Name')

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
                <h3>blog</h3>
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
                        <li><a href="index-2.html">HOME</a>
                        <li>/</li>
                        <li>BLOG</li>
                    </ul>
                </div>
                <!--breadcrumbs -->
                <div class="clearfix"> </div>
                <div class="row">
                    <!--Blog-left-side-->
                    <div class="col-md-8">
                        <div class="blog-in">
                            <div class="wow fadeIn">
                                <h1>Neque porro quisquam est qui dolorem</h1>
                                <ul class="comm-date">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;March 31, 2018 </li>
                                    <li>|</li>
                                    <li> <span><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp; by Admin name</span> </li>
                                    <li>|</li>
                                    <li><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp; No Comments</li>
                                </ul>
                                <div><img  src="assets/images/blog1.jpg" alt="" title="" class="img-fluid"></div>
                            </div>
                            <div class="blog-text wow fadeIn">
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc dunt ut laoreet dolore magna aliquam erat volutpat. Ut veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc dunt ut laoreet dolore magna aliquam erat volutpat. Ut veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc dunt ut laoreet dolore magna aliquam erat volutpat. Ut veniam, quis nostrud exerci tation ullam corper suscipit </p>
                                <p> lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc dunt ut laoreet dolore magna aliquam erat volutpat. Ut veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc dunt ut laoreet dolore magna aliquam erat volutpat. Ut veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <br>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc dunt ut laoreet dolore magna aliquam erat volutpat. Ut veniam, quis nostrud exerci tation ullam corper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                                <div class="row m-0">
                                    <div class="col-md-5 no-padding-left text-center"><img  src="assets/images/blog2.jpg" class="img-fluid" alt=""></div>
                                    <div class="col-md-7 padd22">
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit. cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                <div class="clearfix"></div>
                                <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                                <div class="clearfix"></div>
                                <hr class="pro-hr">
                                <div class="clearfix"></div>
                                <div class="comment-section">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2  text-center"><img  src="assets/images/client-1.jpg" class="img-fluid small-img" alt=""></div>
                                        <div class="col-md-10 col-sm-10 main-comment">
                                            <h4>Duis autem vel <span>20 june, 2018 at 9:00 am</span></h4>
                                            <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr class="pro-hr">
                                <div class="clearfix"></div>
                                <div class="comment-section">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 text-center"><img  src="assets/images/client-2.jpg" class="img-fluid small-img" alt=""></div>
                                        <div class="col-md-10 col-sm-10 main-comment">
                                            <h4>Duis autem vel <span>20 june, 2018 at 9:00 am</span></h4>
                                            <p>Duis autem vel eum iriure dolor in hendrerit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsanet iusto odio dignissim qui blandit praesent. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <hr class="pro-hr">
                                <div class="clearfix"></div>
                                <div class="reply-form no-margin no-background no-border no-padding">
                                    <form>
                                        <h3>Leave the comment</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input class="form-group name-input" placeholder="Name" type="text">
                                            </div>
                                            <div class="col-sm-6 no-padding-left2">
                                                <input class="form-group name-input" placeholder="Email" type="email">
                                            </div>
                                            <div class="col-sm-12">
                                                <textarea placeholder="Message"></textarea>
                                                <div class="clearfix"></div>
                                                <a href="blog-in.html" class="continue2 montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a> </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
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
