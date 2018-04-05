<section id="companies" class="box">
    <div class="container">
        <div class="row text-center">
            <div id="trainer"></div>
        </div>
    </div>
</section>
@if(!empty(config('companies')))
    <section id="company-logos" class="box">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>{{ __('messages.companies.headline') }}</h2>
                </div><!-- col -->
                <div class="col-md-12">
                    @foreach(config('companies') as $company)
                        <a href="{{ $company['url'] }}" target="_blank" title="{{ $company['title'] }}">
                            <img src="{{ asset('images/companies/'.$company['image']) }}">
                        </a>
                    @endforeach
                </div><!-- col -->
            </div><!-- row -->
        </div>
    </section>
@endif