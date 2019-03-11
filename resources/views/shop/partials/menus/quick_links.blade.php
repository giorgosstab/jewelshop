<ul class="pull-left">
    @foreach($items as $item)
        <li><a href="{{ $item->link() }}" target="{{ $item->target }}"><i class="fa fa-stop" aria-hidden="true"></i>{{ $item->title }}</a></li>
    @endforeach
</ul>
