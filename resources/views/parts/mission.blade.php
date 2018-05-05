@if(!empty(config('mission')))
    <section id="mission">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <h2>{{ __('messages.mission.headline') }}</h2>
                    <p>{{ __('messages.mission.text') }}</p>
                </div><!-- col -->
            </div><!-- row -->

            <div class="row">
                @foreach(config('mission') as $missionItem)
                    <div class="col-md-6 mission-item">
                        <div class="mission-icon pull-left">
                            <img src="{{ asset('images/roadmap/' . $missionItem['icon']) }}" alt="icon">
                        </div><!-- mission_icon -->

                        <div class="mission-content">
                            <h3>{{ __($missionItem['headline']) }}</h3>
                            <p>{{ __($missionItem['text']) }}</p>
                        </div><!-- mission_content -->
                        <div class="clearfix"></div>
                    </div><!-- col -->
                @endforeach
            </div><!-- row -->
        </div><!-- container -->
    </section>
@endif