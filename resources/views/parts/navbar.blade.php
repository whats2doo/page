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
            <a class="navbar-brand" href="#">Hannes</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="w2d-navbar-collapse">
            @isset($menu)
                <ul class="nav navbar-nav navbar-right">
                    @foreach($menu as $menuItem)
                        <li>
                            <a @isset($menuItem['target']) target="{{ $menuItem['target'] }}" @endif href="{{ $menuItem['href'] }}">{!! $menuItem['title'] !!}</a>
                        </li>
                    @endforeach
                </ul>
            @endisset
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>