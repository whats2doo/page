<div id="token-allocation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
                <h2>{{ __('messages.token-allocation.headline') }}</h2>
                <p>{{ __('messages.mission.text') }}</p>
            </div><!-- col -->
        </div><!-- row -->

        <div class="row">
            <div class="col-md-6">
                <div class="chart">
                    <div class="chart-description">
                        Distribution
                    </div><!-- chart-description -->

                    <canvas id="chart-distribution"></canvas>
                </div><!-- chart -->

                @if(!empty($tokenAllocation['distribution']))
                    <div class="chart-legend">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    @if(!empty($tokenAllocation['distribution']['left']))
                                        @foreach($tokenAllocation['distribution']['left'] as $distributionLeftItem)
                                            <li>
                                                <div class="legend-color legend-color-{{ $distributionLeftItem['color'] }}"></div>
                                                <div class="legend-info">
                                                    <div class="legend-title">{{ __($distributionLeftItem['title']) }}</div>
                                                    <div class="legend-value">{{ $distributionLeftItem['value'] }}</div>
                                                </div><!-- legend-info -->
                                                <div class="clearfix"></div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div><!-- col -->

                            <div class="col-sm-6">
                                <ul>
                                    @if(!empty($tokenAllocation['distribution']['right']))
                                        @foreach($tokenAllocation['distribution']['right'] as $distributionLeftItem)
                                            <li>
                                                <div class="legend-color legend-color-{{ $distributionLeftItem['color'] }}"></div>
                                                <div class="legend-info">
                                                    <div class="legend-title">{{ __($distributionLeftItem['title']) }}</div>
                                                    <div class="legend-value">{{ $distributionLeftItem['value'] }}</div>
                                                </div><!-- legend-info -->
                                                <div class="clearfix"></div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- chart-legend -->
                @endif
            </div><!-- col -->

            <div class="col-md-6">
                <div class="chart">
                    <div class="chart-description">
                        Use of Proceeds
                    </div><!-- chart-description -->

                    <canvas id="chart-use-of-proceeds"></canvas>
                </div><!-- chart -->

                @if(!empty($tokenAllocation['use-of-proceeds']))
                    <div class="chart-legend">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul>
                                    @if(!empty($tokenAllocation['use-of-proceeds']['left']))
                                        @foreach($tokenAllocation['use-of-proceeds']['left'] as $useOfProccedsLeftItem)
                                            <li>
                                                <div class="legend-color legend-color-{{ $useOfProccedsLeftItem['color'] }}"></div>
                                                <div class="legend-info">
                                                    <div class="legend-title">{{ __($useOfProccedsLeftItem['title']) }}</div>
                                                    <div class="legend-value">{{ $useOfProccedsLeftItem['value'] }}</div>
                                                </div><!-- legend-info -->
                                                <div class="clearfix"></div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div><!-- col -->

                            <div class="col-sm-6">
                                <ul>
                                    @if(!empty($tokenAllocation['use-of-proceeds']['right']))
                                        @foreach($tokenAllocation['use-of-proceeds']['right'] as $useOfProccedsRightItem)
                                            <li>
                                                <div class="legend-color legend-color-{{ $useOfProccedsRightItem['color'] }}"></div>
                                                <div class="legend-info">
                                                    <div class="legend-title">{{ __($useOfProccedsRightItem['title']) }}</div>
                                                    <div class="legend-value">{{ $useOfProccedsRightItem['value'] }}</div>
                                                </div><!-- legend-info -->
                                                <div class="clearfix"></div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- chart-legend -->
                @endif
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- token-allocation -->