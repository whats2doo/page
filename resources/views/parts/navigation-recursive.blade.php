@if (isset ($menuItem['children']) && count($menuItem['children']) > 0)
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" @isset($menuItem['target']) target="{{ $menuItem['target'] }}" @endif href="{{ $menuItem['href'] }}" @if(Request::is('/'))data-scroll="{{ $menuItem['scroll'] or '' }}"@endif>
            {{ __('messages.navigation.'.$menuItem['title']) }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            @foreach($menuItem['children'] as $menuItem)
                @include('parts.navigation-recursive', $menuItem)
            @endforeach
        </ul><!-- dropdown-menu -->
    </li>
@else
    <li>
        <a @isset($menuItem['target']) target="{{ $menuItem['target'] }}" @endif href="{{ $menuItem['href'] }}" @if(Request::is('/'))data-scroll="{{ $menuItem['scroll'] or '' }}"@endif>
            {{ __('messages.navigation.'.$menuItem['title']) }}
        </a>
    </li>
@endif
