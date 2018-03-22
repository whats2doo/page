<section id="advisors" class="box">
    <div class="container">
        <div class="row text-center">
            <div class="container_inner">
                <h2>Our Advisors</h2>
                <p>W2Ds will also be used within the integrated What2doo ad platfrom. Impressions and clicks will be exchanged for W2Ds. These ads will be displayed within the user’s Job feed and there ToDo list.</p>
            </div>
        </div>
    </div>
    @isset($advisors)
    <div class="container">
        <div class="row text-center">
            <div class="list_section">
            @php ($i = 1)
            @foreach ($advisors as $member)
                <div class="col-lg-3">
                    <img class="img-circle teamimage" src="{{ asset('images/team/'.$member['image']) }}" alt="" width="160" height="160">
                    <h3>{{ $member['name'] }}</h3>
                    <p class="jobtitle">{{ $member['jobtitle'] }}</p>
                    <p class="socialprofiles">
                        @isset($member['socialprofiles'])
                        @foreach ($member['socialprofiles'] as $profile=>$url)
                            <a href="{{ $url }}"><i class="ion-social-{{ $profile }}"></i></a>

                        @endforeach
                        @endisset
                    </p>
                    <p>{{ $member['text'] }}</p>

                </div>
                @if ($i % 4 == 0)
                    </div></div><div class="row text-center"><div class="list_section">
                @endif
                @php ($i++)
            @endforeach
            </div>
        </div>
    </div>
    @endisset
</section>