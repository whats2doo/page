<div id="numbers">
    <div id="gardener"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="whats2doo-logo">
                    <a href="https://whats2doo.com" target="_blank">
                        <img src="{{ asset('images/whats2doo.svg') }}" alt="whats2doo-logo">
                    </a>
                </div><!-- whats2doo-logo -->
            </div><!--col -->

            @if(!empty(config('numbers')))
                @foreach(config('numbers') as $numberItem)
                    <div class="col-md-3 col-sm-6">
                        <div class="number">
                            <div class="number-counter">
                                {{ $numberItem['counter'] }}
                            </div><!-- number-counter -->

                            <div class="number-description">
                                {{ __($numberItem['description']) }}
                            </div><!-- number-description -->
                        </div>
                    </div><!-- col -->
                @endforeach
            @endif
        </div><!-- row -->
    </div><!-- container -->
</div><!-- numbers -->
