
@foreach($pages as $page)
    <li class="{{Request::is($page->uri_wildcard)?'active':''}}
{{count($page->children)?($page->isChild()?'dropdown-submenu':'dropdown'):''}}">
    <a class="page-scroll" href="{{$page->uri}}">
        {{$page->title}}
        @if(count($page->children))
            <span class="caret {{$page->isChild()?'right':''}}"></span>
        @endif
    </a>
    @if(count($page->children))
        <ul class="dropdown-submenu">
            @include('partials.navigation',['pages'=>$page->children])
        </ul>
    @endif
</li>
@endforeach