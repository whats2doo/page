<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-logo footer-col">
                <img src="{{ asset('images/w2d-primary-text.svg') }}" width="180">
                <div class="copyright">{{ __('messages.footer.copyright') }}</div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-col">
                <div class="footer-title">{{ __('messages.footer.title-sitemap') }}</div>
                @if(!empty(config('menu-footer')))
                    <div class="row">
                        @foreach (collect(config('menu-footer'))->split(2) as $chunk)
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <ul>
                                    @foreach ($chunk as $item)
                                        <li>
                                            <a href="{{ $item['href'] }}">{{ __('messages.footer.navigation.'.$item['title']) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                @endif
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 footer-col">
                <div class="footer-title">{{ __('messages.footer.title-documents') }}</div>
                <ul>
                    <li>
                        <a href="{{ asset('documents/whitepaper.pdf') }}" target="_blank">Whitepaper</a>
                    </li>
                    <li>
                        <a href="#">Another document</a>
                    </li>
                </ul>

            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 footer-col">
                <div class="footer-title">{{ __('messages.footer.title-social') }}</div>
                @if(!empty(config('social')))
                    <ul>
                        @foreach(config('social') as $socialItem)
                            <li>
                                <a target="_blank" href="{{ $socialItem['href'] }}" title="{{ $socialItem['title'] }}">
                                    <i class="{{ $socialItem['icon'] }}"></i> {{ $socialItem['title'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</footer>