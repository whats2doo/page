<div id="ico">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6">
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
                                        {{ __('messages.ico.main-ico.text') }}
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

                                <div class="col-xs-12">
                                    <div class="main-ico-bonus-rate">
                                        <div class="main-ico-bonus-rate-title">
                                            {{ __('messages.ico.main-ico.bonus-rate.title')}}
                                        </div><!-- main-ico-bonus-rate-title -->

                                        <div class="main-ico-bonus-rate-description">
                                            {{ __('messages.ico.main-ico.bonus-rate.description') }}
                                        </div><!-- main-ico-bonus-rate-description -->

                                        @if(!empty($ico['main-ico']['table']))
                                            <div class="main-ico-bonus-rate-table">
                                                <table class="table">
                                                    @foreach($ico['main-ico']['table'] as $icoTableItem)
                                                        <tr>
                                                            <th>{{ __($icoTableItem['title']) }}</th>
                                                            <td>{{ __($icoTableItem['value']) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </div><!-- main-ico-bonus-rate-table -->
                                        @endif
                                    </div><!-- main-ico-bonus-rate -->
                                </div>
                            </div><!-- main-ico-info -->
                        </div><!-- row -->
                    </div><!-- col-xs-12 -->
                </div><!-- row -->
            </div><!-- col -->

            <!-- -3 col-lg-push-2 col-lg-offset-0 col-md-4 col-md-push-1 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3 -->
            <div class="col-md-4 col-md-offset-0 col-lg-4 col-lg-push-2 col-lg-offset-0 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
                <div id="carRepair"></div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- ico -->