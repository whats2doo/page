<div id="ico">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ico-tabs">
                            <ul>
                                <li>
                                    {{ __('messages.ico.pre-ico.tab') }}
                                </li>

                                <li>
                                    {{ __('messages.ico.main-ico.tab') }}
                                </li>
                            </ul>
                        </div><!-- ico-tabs -->
                    </div><!-- col-xs-12 -->

                    <div class="col-xs-12">
                        {{ __('messages.ico.pre-ico.text') }}

                        <div class="row">
                            <div id="pre-ico-info">
                                <div class="col-xs-6">
                                    <ul>
                                        @if(!empty($tokenAllocation['use-of-proceeds']['left']))
                                            @foreach($tokenAllocation['use-of-proceeds']['left'] as $useOfProccedsLeftItem)
                                                <li>
                                                    <div class="ico-info-title">{{ __($useOfProccedsLeftItem['title']) }}</div>
                                                    <div class="ico-info-value">{{ $useOfProccedsLeftItem['value'] }}</div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div><!-- col -->

                                <div class="col-xs-6">
                                    asdfasdf
                                </div><!-- col -->
                            </div><!-- pre-ico-info -->

                            <div id="main-ico-info" class="hidden">
                                <div class="col-xs-6">
                                    asdfasd
                                </div><!-- col -->

                                <div class="col-xs-6">
                                    asdfasdf
                                </div><!-- col -->
                            </div><!-- main-ico-info -->
                        </div><!-- row -->
                    </div><!-- col-xs-12 -->
                </div><!-- row -->
            </div><!-- col -->

            <div class="col-sm-6">
                <div id="carRepair"></div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- ico -->