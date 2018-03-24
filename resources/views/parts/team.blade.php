<section id="team" class="box">
    <div class="container">
        <div class="row text-center">
            <div class="container_inner">
                <h2>{{ __('messages.team.headline') }}</h2>
                <p>{{ __('messages.team.text') }}</p>
            </div>
        </div>
    </div>
    @if(!empty($team))
    <div class="container">
        <div class="row text-center">
            <div class="list_section">
            @foreach ($team as $member)
                <div class="col-lg-3">
                    <img class="img-circle teamimage" src="{{ asset('images/team/'.$member['image']) }}" alt="" width="160" height="160">
                    <h3>{{ $member['name'] }}</h3>
                    <p class="jobtitle">{{ $member['jobtitle'] }}</p>
                    <p class="socialprofiles">
                        @if(!empty($member['socialprofiles']))
                            @foreach ($member['socialprofiles'] as $profile)
                                <a href="{{ $profile['url'] }}"><i class="ion-{{ $profile['icon'] }}"></i></a>
                            @endforeach
                        @endif
                    </p>
                    <p>{{ __('messages.team.members_text.'.$member['text']) }}</p>

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