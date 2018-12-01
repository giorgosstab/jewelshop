<div class="social-media">
    @foreach($items as $item)
        <!--{{ $item->title }}-->
        <a href="{{ $item->link() }}" class="mr-3" target="{{ $item->target }}"><i class="fa fa-lg {{ $item->title }}"> </i></a>
    @endforeach
</div>
