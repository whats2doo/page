<li @if (isset ($menuItem['children']) && count($menuItem['children']) > 0) class="dropdown" @endif>
    <a @if (isset ($menuItem['children']) && count($menuItem['children']) > 0) class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" @endif @isset($menuItem['target']) target="{{ $menuItem['target'] }}" @endif href="{{ $menuItem['href'] }}" data-scroll="{{ $menuItem['scroll'] or '' }}">
        {{ __('messages.navigation.'.$menuItem['title']) }}
    </a>
    @if (isset ($menuItem['children']) && count($menuItem['children']) > 0)
        <ul class="dropdown-menu">
            @foreach($menuItem['children'] as $menuItem)
                @include('parts.navigation-recursive', $menuItem)
            @endforeach
        </ul><!-- dropdown-menu -->
    @endif
</li>
