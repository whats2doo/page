<nav class="navbar navbar-default navbar-fixed-top navbar-clear" id="navbar-main">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#w2d-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div id="mobile-call-to-action" class="pull-right hidden-md hidden-lg">
                <a href="#" class="btn btn-default">
                    Sign up
                </a>
            </div>

            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo-clear" src="{{ asset('images/w2d.svg') }}" alt="w2d-logo">
                <img class="logo" src="{{ asset('images/w2d-primary.svg') }}" alt="w2d-logo">
            </a>
        </div><!-- navbar-header -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="w2d-navbar-collapse">
            @if(!empty($menu))
                <ul class="nav navbar-nav navbar-right">
                    @foreach($menu as $menuItem)
                        <li>
                            <a @isset($menuItem['target']) target="{{ $menuItem['target'] }}" @endif href="{{ $menuItem['href'] }}">
                                {{ __('messages.navigation.'.$menuItem['title']) }}
                            </a>
                        </li>
                    @endforeach

                    @if(!empty(config('social')))
                        @foreach(config('social') as $socialItem)
                            <li class="social hidden-xs hidden-sm @if($loop->first) social-first @endif @if($loop->last) social-last @endif">
                                <a target="_blank" href="{{ $socialItem['href'] }}" title="{{ $socialItem['title'] }}">
                                    <i class="{{ $socialItem['icon'] }}"></i>
                                </a>
                            </li>
                        @endforeach

                        <li class="social hidden-md hidden-lg">
                            @foreach(config('social') as $socialItem)
                                <a target="_blank" href="{{ $socialItem['href'] }}" title="{{ $socialItem['title'] }}">
                                    <i class="{{ $socialItem['icon'] }}"></i>
                                </a>
                            @endforeach
                        </li>
                    @endif

                    <li class="call-to-action hidden-xs hidden-sm">
                        <a href="#" class="btn btn-default">
                            Sign up
                        </a>
                    </li>
                </ul>
            @endif
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>