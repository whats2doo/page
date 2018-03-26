<section id="advisors" class="box">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <h2>{{ __('messages.advisors.headline') }}</h2>
                <p>{{ __('messages.advisors.text') }}</p>
            </div><!-- col -->
        </div><!-- row -->

        @if(!empty($advisors))
                <div class="row text-center">
                    <div class="list_section">
                    @foreach ($advisors as $member)
                        <div class="col-sm-6 col-md-3 col-lg-3 member">
                            <img class="img-circle teamimage lazyload" src="{{ asset('images/team/placeholder.jpg') }}" data-original="{{ asset('images/team/'.$member['image']) }}" alt="" width="160" height="160">
                            <h3>{{ $member['name'] }}</h3>
                            <div class="jobtitle">{{ $member['jobtitle'] }}</div>
                            <div class="socialprofiles">
                                @if(!empty($member['socialprofiles']))
                                    @foreach ($member['socialprofiles'] as $profile)
                                        @if ($profile['url'] != '')
                                            <a href="{{ $profile['url'] }}"><i class="ion-{{ $profile['icon'] }}"></i></a>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        @if ($loop->iteration % 4 == 0)
                            </div></div><div class="row text-center"><div class="list_section">
                        @endif
                    @endforeach
                    </div>
                </div>
        @endif
    </div>
</section>