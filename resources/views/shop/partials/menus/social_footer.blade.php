<ul class="social2">
    <li> Follow us on : </li>
    @foreach($items as $item)
        <!--{{ $item->title }}-->
        <li><a href="{{ $item->link() }}" target="{{ $item->target }}"><i class="fa {{ $item->title }}"></i></a></li>
    @endforeach
</ul>
