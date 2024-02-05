<ul>
    @foreach($menuItems as $item)
        @if ($item->nestedItems->count() > 0)
            <li class="has-dropdown">
                <a href="{{$item->url}}">{{ $item->text }}</a>
                <ul class="dropdown">
                    @foreach($item->nestedItems as $nestedItem)
                        <li><a href="{{ $nestedItem->url }}">{{$nestedItem->text}}</a></li>
                    @endforeach
                </ul>
            </li>
        @else
            <li class="{{ request()->is($item->url) ? 'active' : '' }}">
                <a href="{{ $item->url }}">{{ $item->text }}</a>
            </li>
        @endif
    @endforeach
</ul>
