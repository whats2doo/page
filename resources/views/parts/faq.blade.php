@if(!empty(config('faq')))
    <section id="houseman-container">
        <div class="houseman-background"></div>
        <div id="houseman"></div>
    </section>
    <section id="faq">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <h2>{{ __('messages.faq.headline') }}</h2>
                </div><!-- col -->
            </div><!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        @foreach(config('faq') as $faqItem)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{ $loop->iteration }}">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapse{{ $loop->iteration }}" aria-expanded="false"
                                           aria-controls="collapse{{ $loop->iteration }}">
                                            <div class="faq-number pull-left">
                                                {{ $loop->iteration }}
                                            </div>
                                            <div class="faq-title">
                                                {{ __($faqItem['headline']) }}
                                            </div>
                                            <div class="clearfix"></div>
                                        </a>
                                    </h4>
                                </div><!-- panel-heading -->
                                <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="heading{{ $loop->iteration }}">
                                    <div class="panel-body">
                                        {!! __($faqItem['text']) !!}
                                    </div>
                                </div><!-- collapse -->
                            </div><!-- panel-default -->
                        @endforeach
                    </div><!-- accordion -->
                </div><!-- col -->
            </div><!-- row -->
            <div class="row gradient">
                <div class="col-md-12 text-center">
                    <a href="#" id="more" class="btn btn-default text-uppercase">{{ __('messages.faq.showmore') }}</a>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>
@endif