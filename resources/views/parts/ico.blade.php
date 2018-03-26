<div id="ico">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="ico-tabs">
                            @spaceless
                            <ul>
                                <li id="pre-ico-tab" class="active">
                                    {{ __('messages.ico.pre-ico.tab') }}
                                </li>

                                <li id="main-ico-tab">
                                    {{ __('messages.ico.main-ico.tab') }}
                                </li>
                            </ul>
                            @endspaceless
                        </div><!-- ico-tabs -->
                    </div><!-- col-xs-12 -->

                    <div class="col-xs-12">
                        <div class="row">
                            <div id="pre-ico-info">
                                <div class="col-xs-12">
                                    <div class="ico-info-text">
                                        {{ __('messages.ico.pre-ico.text') }}
                                    </div><!-- ico-info-text -->
                                </div><!-- col -->

                                <div class="col-xs-6">
                                    <ul>
                                        @if(!empty($ico['pre-ico']['left']))
                                            @foreach($ico['pre-ico']['left'] as $preIcoItem)
                                                <li>
                                                    <div class="ico-info-title">{{ __($preIcoItem['text']) }}</div>
                                                    <div class="ico-info-value">{{ __($preIcoItem['description']) }}</div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div><!-- col -->

                                <div class="col-xs-6">
                                    <ul>
                                        @if(!empty($ico['pre-ico']['right']))
                                            @foreach($ico['pre-ico']['right'] as $preIcoItem)
                                                <li>
                                                    <div class="ico-info-title">{{ __($preIcoItem['text']) }}</div>
                                                    <div class="ico-info-value">{{ __($preIcoItem['description']) }}</div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div><!-- col -->
                            </div><!-- pre-ico-info -->

                            <div id="main-ico-info">
                                <div class="col-xs-12">
                                    <div class="ico-info-text">
                                        {{ __('messages.ico.pre-ico.text') }}
                                    </div><!-- ico-info-text -->
                                </div><!-- col -->

                                <div class="col-xs-6">
                                    <ul>
                                        @if(!empty($ico['main-ico']['left']))
                                            @foreach($ico['main-ico']['left'] as $preIcoItem)
                                                <li>
                                                    <div class="ico-info-title">{{ __($preIcoItem['text']) }}</div>
                                                    <div class="ico-info-value">{{ __($preIcoItem['description']) }}</div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div><!-- col -->

                                <div class="col-xs-6">
                                    <ul>
                                        @if(!empty($ico['main-ico']['right']))
                                            @foreach($ico['main-ico']['right'] as $preIcoItem)
                                                <li>
                                                    <div class="ico-info-title">{{ __($preIcoItem['text']) }}</div>
                                                    <div class="ico-info-value">{{ __($preIcoItem['description']) }}</div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
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