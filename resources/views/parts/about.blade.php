<section id="about" class="box">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <h2>{{ __('messages.about.headline') }}</h2>
            </div>

            <div class="col-lg-9 col-md-8">
                <div class="about-item">
                    <div class="about-icon pull-left">
                        <img src="{{ asset('images/w2d-primary.svg') }}" alt="icon">
                    </div><!-- about_icon -->

                    <div class="about-content">
                        <h3>{{ __('messages.about.text_p1_headline') }}</h3>
                        <p>{{ __('messages.about.text_p1') }}</p>
                    </div><!-- about_content -->
                    <div class="clearfix"></div>
                </div><!-- col -->

                <div class="about-item">
                    <div class="about-icon pull-left">
                        <img src="{{ asset('images/icons/report.svg') }}" alt="icon">
                    </div><!-- about_icon -->

                    <div class="about-content">
                        <h3>{{ __('messages.about.text_p2_headline') }}</h3>
                        <p>{{ __('messages.about.text_p2') }}</p>
                    </div><!-- about_content -->
                    <div class="clearfix"></div>
                </div><!-- col -->
            </div><!-- col -->

            <div class="col-lg-3 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                <div id="carpenter"></div>
            </div><!-- col -->
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <p>
                    {{ __('messages.about.link_description') }}
                </p>
                <p>
                    <a href="https://www.whats2doo.com" target="_blank" class="btn btn-lg btn-default text-uppercase">
                        whats2doo.com <i class="ion-md-arrow-forward"></i>
                    </a>
                </p>
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section>