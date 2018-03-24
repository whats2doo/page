<section id="advisors" class="box">
    <div class="container">
        <div class="row text-center">
            <div class="container_inner">
                <h2>{{ __('messages.advisors.headline') }}</h2>
                <p>{{ __('messages.advisors.text') }}</p>
            </div>
        </div>
    </div>
    @if(!empty($advisors))
    <div class="container">
        <div class="row text-center">
            <div class="list_section">
            @foreach ($advisors as $member)
                <div class="col-lg-3">
                    <img class="img-circle teamimage" src="{{ asset('images/team/'.$member['image']) }}" alt="" width="160" height="160">
                    <h3>{{ $member['name'] }}</h3>
                    <p class="jobtitle">{{ $member['jobtitle'] }}</p>
                    <p class="socialprofiles">
                        @if(!empty($member['socialprofiles']))
                        @foreach ($member['socialprofiles'] as $profile=>$url)

                            @if ($profile == 'linkedin')
                                @php ($iconname = 'logo-linkedin')
                            @elseif ($profile == 'xing')
                                @php ($iconname = '')
                            @elseif ($profile == 'mail')
                                @php ($iconname = 'ios-mail')
                            @elseif ($profile == 'whats2doo')
                                @php ($iconname = '')
                            @endif

                            <a href="{{ $url }}"><i class="ion-{{ $iconname }}"></i></a>

                        @endforeach
                        @endif
                    </p>
                    <p>{{ __('messages.advisors.members_text.'.$member['text']) }}</p>

                </div>
                @if ($loop->iteration % 4 == 0)
                    </div></div><div class="row text-center"><div class="list_section">
                @endif
            @endforeach
            </div>
        </div>
    </div>
    @endif
</section>