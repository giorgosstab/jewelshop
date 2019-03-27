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
                                <div class="col-md-6 offset-md-4">
                                    <div class="tag-list">
                                        <ul>
                                            @foreach($post->tags as $tag)
                                                <li><a href="{{ route('shop.blog.index', 'tag='.$tag->slug) }}" title="{{ $tag->name }}"><i class="fa fa-tag"></i> {{ $tag->name }} </a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-text wow fadeIn">
                                {!! $post->body !!}
                                <div class="clearfix"></div>
                                @foreach($post->comments as $comment)
                                    <div class="clearfix"></div>
                                    <hr class="pro-hr">
                                    <div class="clearfix"></div>
                                    <div class="comment-section">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2  text-center">
                                                <img src="{{ $comment->user_id == null ? "https://www.gravatar.com/avatar/".md5(strtolower(trim($comment->email))) : secure_asset('storage/' . $comment->user->avatar) }}" class="img-fluid rounded-circle small-img" alt="">
                                            </div>
                                            <div class="col-md-10 col-sm-10 main-comment">
                                                <h4>{{ $comment->user_id == null ? $comment->name : $comment->user->name }} <span>{{ $comment->created_at->format('d F, Y \\A\\T h:i A') }}</span></h4>
                                                <p>{{ $comment->comment }}</p>
                                                <p>
                                                    @if(auth()->id() == $comment->user_id)
                                                        {!! Form::open(['method' => 'POST','route' => ['shop.comment.destroy',$comment], 'id' => 'deleteComment'.$comment->id]) !!}
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <a href="#" onclick="document.getElementById('deleteComment{{ $comment->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a> |
                                                    @endif
                                                    <a data-toggle="collapse" href="#collapseReply{{ $comment->id }}"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                                    @if(auth()->id() == $comment->user_id){!! Form::close() !!}@endif
                                                </p>
                                            </div>
                                        </div>
                                        <div class="comment-section comment-reply">
                                            @foreach($comment->replies as $reply)
                                                <hr class="pro-hr">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2  text-center">
                                                        <img src="{{ $reply->user_id == null ? "https://www.gravatar.com/avatar/".md5(strtolower(trim($reply->email))) : secure_asset('storage/' . $reply->user->avatar) }}" width="50" class="img-fluid rounded-circle small-img" alt="">
                                                    </div>
                                                    <div class="col-md-10 col-sm-10 main-comment">
                                                        <h4>{{ $reply->user_id == null ? $reply->name : $reply->user->name }} <span>{{ $reply->created_at->format('d F, Y \\A\\T h:i A') }}</span></h4>
                                                        <p>{{ $reply->comment }}</p>
                                                        <p>
                                                            @if(auth()->id() == $reply->user_id)
                                                                {!! Form::open(['method' => 'POST','route' => ['shop.comment.destroyReply',$reply], 'id' => 'deleteReply'.$reply->id]) !!}
                                                                {{ csrf_field() }}
                                                                {{ method_field('DELETE') }}
                                                                <a href="#" onclick="document.getElementById('deleteReply{{ $reply->id }}').submit()"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a> |
                                                            @endif
                                                            <a data-toggle="collapse" href="#collapseReply{{ $comment->id }}"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                                            @if(auth()->id() == $reply->user_id){!! Form::close() !!}@endif
                                                        </p>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="collapse" id="collapseReply{{ $comment->id }}">
                                                <div class="reply-form no-margin no-background no-border no-padding">
                                                    @guest
                                                        {!! Form::open(['method' => 'POST','route' => ['shop.comment.reply',$post->id,$comment->id]]) !!}
                                                        {{ csrf_field() }}
                                                        <h3>Reply the comment</h3>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input class="form-group name-input" name="name" placeholder="Name" type="text" autofocus>
                                                            </div>
                                                            <div class="col-sm-6 no-padding-left2">
                                                                <input class="form-group name-input" name="email" placeholder="Email" type="email">
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <textarea  name="comment" placeholder="Message"></textarea>
                                                                <div class="clearfix"></div>
                                                                <button type="submit" class="continue2 montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </button>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    @else
                                                        {!! Form::open(['method' => 'POST','route' => ['shop.comment.reply',$post->id,$comment->id]]) !!}
                                                        {{ csrf_field() }}
                                                        <h3>Reply the comment</h3>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <textarea  name="comment" placeholder="Message" autofocus></textarea>
                                                                <div class="clearfix"></div>
                                                                <button type="submit" class="continue2 montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </button>
                                                            </div>
                                                            <input class="hidden" name="name" type="text" value="{{ auth()->user()->name }}">
                                                            <input class="hidden" name="email" type="email" value="{{ auth()->user()->email }}">
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        {!! Form::close() !!}
                                                    @endguest
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <hr class="pro-hr">
                                <div class="clearfix"></div>
                                <div class="reply-form no-margin no-background no-border no-padding">
                                    @guest
                                        {!! Form::open(['method' => 'POST','route' => ['shop.comment.store',$post->id]]) !!}
                                            {{ csrf_field() }}
                                            <h3>Leave the comment</h3>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <input class="form-group name-input" name="name" placeholder="Name" type="text">
                                                </div>
                                                <div class="col-sm-6 no-padding-left2">
                                                    <input class="form-group name-input" name="email" placeholder="Email" type="email">
                                                </div>
                                                <div class="col-sm-12">
                                                    <textarea  name="comment" placeholder="Message"></textarea>
                                                    <div class="clearfix"></div>
                                                    <button type="submit" class="continue2 montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        {!! Form::close() !!}
                                    @else
                                        {!! Form::open(['method' => 'POST','route' => ['shop.comment.store',$post->id]]) !!}
                                            {{ csrf_field() }}
                                            <h3>Leave the comment as {{ auth()->user()->name }}</h3>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <textarea  name="comment" placeholder="Message"></textarea>
                                                    <div class="clearfix"></div>
                                                    <button type="submit" class="continue2 montserrat">SUBMIT <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </button>
                                                </div>
                                                <input class="hidden" name="name" type="text" value="{{ auth()->user()->name }}">
                                                <input class="hidden" name="email" type="email" value="{{ auth()->user()->email }}">
                                                <div class="clearfix"></div>
                                            </div>
                                        {!! Form::close() !!}
                                    @endguest
                                </div>
                                <div class="clearfix"></div>
                            </div>
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
    <div class="clearfix"></div>
@endsection

@section('extra-script')

@endsection
                                                                                                                                          
