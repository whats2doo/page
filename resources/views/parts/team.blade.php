<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <h2>{{ __('messages.team.headline') }}</h2>
                <p>{{ __('messages.team.text') }}</p>
            </div><!-- col -->
        </div><!-- row -->

        @if(!empty($team))
            <div class="row text-center">
                <div class="list-section">
                    @foreach ($team as $member)
                        <div class="col-sm-6 col-md-3 col-lg-3 member">
                            <img class="img-circle teamimage lazyload" src="{{ asset('images/icons/eclipse.svg') }}"
                                 data-original="{{ asset('images/team/'.$member['image']) }}" alt="" width="160"
                                 height="160">
                            <h3>{{ $member['name'] }}</h3>
                            <div class="jobtitle">{{ $member['jobtitle'] }}</div>
                            <div class="socialprofiles">
                                @if(!empty($member['socialprofiles']))
                                    @foreach ($member['socialprofiles'] as $profile => $values)
                                        @if($values['url']!='')
                                            <a href="{{ $values['url'] }}" target="_blank"
                                               title="{{ ucfirst($profile) }}">
                                                <i class="ion-{{ $values['icon'] }}"></i>
                                            </a>
                                        @endif
                                    @endforeach
                                @endif
                            </div>
                            @if ($loop->iteration < 5)
                                <p>{{ __('messages.team.members_text.'.$member['text']) }}</p>
                            @endif

                        </div>
                        @if ($loop->iteration % 4 == 0)
                </div>
            </div>
            <div class="row text-center">
                <div class="list-section">
                    @endif
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>