@if(!empty(config('companies-header')))
<section id="company-logos-header" class="box">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                @foreach(config('companies-header') as $company)
                <a href="{{ $company['url'] }}" target="_blank" title="{{ $company['title'] }}">
                    <img src="{{ asset('images/companies-header/'.$company['image']) }}">
                </a>
                @endforeach
            </div><!-- col -->
        </div><!-- row -->
    </div>
</section>
@endif