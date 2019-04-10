{{--@if(!(request()->is('checkout-user') || request()->is('checkout-guest')))--}}
    <ul class="navbar-nav">
        @foreach($items as $item)
            @if($item->children->count())
                @if($item->title == "Shop")
                    <li class="nav-item dropdown mega-dropdown {{ isActiveTab($item->route, $item->title) }}"> <a class="nav-link dropdown-toggle text-uppercase no-caret" id="navbarDropdownMenuLink1" href="{{ route('shop.products.index') }}" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> Shop </a>
                        <div class="dropdown-menu mega-menu v-2 row m-0 z-depth-1 special-color" aria-labelledby="navbarDropdownMenuLink1">
                            <div class="row mx-md-4 mx-1">
                                <div class="col-md-2 col-lg-4 col-xl-4 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">
                                    <h6 class="sub-title text-uppercase font-weight-bold white-text">Related</h6>
                                    <!--Featured image-->
                                    <div class="view overlay mb-3 z-depth-1"> <img src="{{ asset('assets/images/menu-img.jpg') }}" class="img-fluid" alt="First sample image">
                                        <div class="mask rgba-white-slight flex-center">
                                            <p></p>
                                        </div>
                                    </div>
                                    <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">THE SAADIA DROP EARRINGS</a></h4>
                                    <p class="font-small text-uppercase white-text"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 / <i class="fa fa-comments-o px-1" aria-hidden="true"></i> 20</p>
                                </div>
                                <div class="col-md-10 col-lg-8 col-xl-8">
                                    <div class="row">
                                        {{--@foreach($categoriesWithSubs as $category)--}}
                                            {{--<div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">--}}
                                                {{--<a class="menu-item" href="{{ route('shop.products.index', ['cat' => $category->slug]) }}"><h6 class="sub-title text-uppercase font-weight-bold white-text">{{ $category->name }}</h6></a>--}}
                                                {{--<ul class="caret-style pl-0">--}}
                                                    {{--@foreach($category->children as $firstSubCategory)--}}
                                                        {{--<li class=""><a class="menu-item" href="{{ route('shop.products.index', ['sub' => $firstSubCategory->slug]) }}">{{ $firstSubCategory->name }}</a></li>--}}
                                                        {{--@foreach($firstNestedSub->children as $secondNestedSub)--}}
                                                            {{--SecondNested : {{ $secondNestedSub->name }}<br>--}}
                                                            {{--@foreach($secondNestedSub->subCategory as $thirdNestedSub)--}}
                                                                {{--$thirdNested: {{ $thirdNestedSub->name }}--}}
                                                            {{--@endforeach()--}}
                                                        {{--@endforeach()--}}
                                                    {{--@endforeach--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--@endforeach--}}
                                        @foreach($item->children as $category)
                                            <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 sub-menu my-xl-5 mt-md-5 mt-1 mb-1">
                                                <a class="menu-item" target="{{ $category->target }}" href="{{ url($category->link()) }}"><h6 class="sub-title text-uppercase font-weight-bold white-text">{{ $category->title }}</h6></a>
                                                <ul class="caret-style pl-0">
                                                    @foreach($category->children as $subCategory)
                                                        <li class=""><a class="menu-item" target="{{ $subCategory->target }}" href="{{ url($subCategory->link()) }}">{{ $subCategory->title }}</a></li>
                                                        {{--@foreach($firstNestedSub->children as $secondNestedSub)--}}
                                                        {{--SecondNested : {{ $secondNestedSub->name }}<br>--}}
                                                        {{--@foreach($secondNestedSub->subCategory as $thirdNestedSub)--}}
                                                        {{--$thirdNested: {{ $thirdNestedSub->name }}--}}
                                                        {{--@endforeach()--}}
                                                        {{--@endforeach()--}}
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" target="{{ $item->target }}" href="{{ url($item->link()) }}" data-toggle="dropdown">{{ $item->title }}</a>
                        <div class="dropdown-menu">
                            @foreach($item->children as $subItem)
                                {{--@if($subItem->children->count())--}}
                                {{--<ul>--}}
                                {{--<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $subItem->title }}<i class="fa fa-angle-right"></i></a>--}}
                                {{--<div class="dropdown-menu">--}}
                                {{--@foreach($subItem->children as $subItemSub)--}}
                                {{--<a class="dropdown-item" target="{{ $subItemSub->target }}" href="{{ url($subItemSub->link()) }}">{{ $subItemSub->title }}</a>--}}
                                {{--@endforeach--}}
                                {{--</div>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--@else--}}
                                <a class="dropdown-item {{ isActiveTab($item->route,$subItem->title) }}" target="{{ $subItem->target }}" href="{{ url($subItem->link()) }}">{{ $subItem->title }}</a>
                                {{--@endif--}}
                            @endforeach
                        </div>
                    </li>
                @endif
            @else
                <li class="nav-item {{ isActiveTab($item->route, $item->title) }}"><a class="nav-link" target="{{ $item->target }}" href="{{ url($item->link()) }}">{{ $item->title }}</a></li>
            @endif
        @endforeach
    </ul>
{{--@endif--}}
@auth
    <ul class="navbar-nav float-lg-right">
        <li class="nav-item dropdown d-none d-lg-block d-xl-block">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                <img class="img-responsive-small rounded-circle" src="{{ Voyager::image(Auth::user()->avatar) }}" /> {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu2">
                <h2 class="text-center"><span class="shopping-cart count"><b>{{ Auth::user()->email }}</b></span></h2>
                <div class="dropdown-menu2-in">
                    <div>
                        <img class="img-responsive" src="{{ Voyager::image(Auth::user()->avatar) }}" />
                        <a class="change" href="#">Change Picture</a>
                        <input class="upload-field" type="file"/>
                    </div>
                    <a href="{{ route('shop.profile.index') }}" class="view-ct"><span class="fa fa-user-o"></span> Profile</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="check-ct"><span class="fa fa-sign-out"></span> Logout</a
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </li>
    </ul>
@endauth
