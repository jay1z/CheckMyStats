<?php
$user_id = $this->session->userdata('user_id');

$post_query = $this->db->get_where('post', array('user_id' => $user_id), null, null);
?>

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title">Dashboard</h3>
        </div>
    </div>
</div>
<!-- END: Subheader -->
<div class="m-content">
    <!--Begin::Main Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-xl-4">
                    <!--begin:: Widgets/Daily Sales-->
                    <div class="m-widget14">
                        <div class="m-widget14__header m--margin-bottom-30">
                            <h3 class="m-widget14__title">Daily Sales</h3>
                            <span class="m-widget14__desc">Check out each collumn for more details</span>
                        </div>
                        <div class="m-widget14__chart" style="height:120px;">
                            <canvas  id="m_chart_daily_sales"></canvas>
                        </div>
                    </div>
                    <!--end:: Widgets/Daily Sales-->
                </div>
                <div class="col-xl-4">
                    <!--begin:: Widgets/Profit Share-->
                    <div class="m-widget14">
                        <div class="m-widget14__header">
                            <h3 class="m-widget14__title">
                                Profit Share
                            </h3>
                            <span class="m-widget14__desc">
													Profit Share between customers
												</span>
                        </div>
                        <div class="row  align-items-center">
                            <div class="col">
                                <div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
                                    <div class="m-widget14__stat">
                                        45
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="m-widget14__legends">
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                        <span class="m-widget14__legend-text">
																37% Sport Tickets
															</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                        <span class="m-widget14__legend-text">
																47% Business Events
															</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                        <span class="m-widget14__legend-text">
																19% Others
															</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Profit Share-->
                </div>
                <div class="col-xl-4">
                    <!--begin:: Widgets/Revenue Change-->
                    <div class="m-widget14">
                        <div class="m-widget14__header">
                            <h3 class="m-widget14__title">
                                Revenue Change
                            </h3>
                            <span class="m-widget14__desc">
													Revenue change breakdown by cities
												</span>
                        </div>
                        <div class="row  align-items-center">
                            <div class="col">
                                <div id="m_chart_revenue_change" class="m-widget14__chart1" style="height: 180px"></div>
                            </div>
                            <div class="col">
                                <div class="m-widget14__legends">
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                        <span class="m-widget14__legend-text">
																+10% New York
															</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                        <span class="m-widget14__legend-text">
																-7% London
															</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                        <span class="m-widget14__legend-text">
																+20% California
															</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Revenue Change-->
                </div>
            </div>
        </div>
    </div>
    <!--End::Main Portlet-->
    <!--Begin::Main Portlet-->
    <div class="row">
        <div class="col-xl-8">
            <!--begin:: Widgets/Application Sales-->
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Application Sales
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
                                    Last Month
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
                                    All Time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget11_tab1_content">
                            <!--begin::Widget 11-->
                            <div class="m-widget11">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table">
                                        <!--begin::Thead-->
                                        <thead>
                                        <tr>
                                            <td class="m-widget11__label">
                                                #
                                            </td>
                                            <td class="m-widget11__app">
                                                Application
                                            </td>
                                            <td class="m-widget11__sales">
                                                Sales
                                            </td>
                                            <td class="m-widget11__change">
                                                Change
                                            </td>
                                            <td class="m-widget11__price">
                                                Avg Price
                                            </td>
                                            <td class="m-widget11__total m--align-right">
                                                Total
                                            </td>
                                        </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Vertex 2.0
																		</span>
                                                <span class="m-widget11__sub">
																			Vertex To By Again
																		</span>
                                            </td>
                                            <td>
                                                19,200
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $63
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $14,740
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Metronic
																		</span>
                                                <span class="m-widget11__sub">
																			Powerful Admin Theme
																		</span>
                                            </td>
                                            <td>
                                                24,310
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $39
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $16,010
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Apex
																		</span>
                                                <span class="m-widget11__sub">
																			The Best Selling App
																		</span>
                                            </td>
                                            <td>
                                                9,076
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $105
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $37,200
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Cascades
																		</span>
                                                <span class="m-widget11__sub">
																			Design Tool
																		</span>
                                            </td>
                                            <td>
                                                11,094
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $16
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $8,520
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <div class="m-widget11__action m--align-right">
                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
                                        Generate Report
                                    </button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                        <div class="tab-pane" id="m_widget11_tab2_content">
                            <!--begin::Widget 11-->
                            <div class="m-widget11">
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table">
                                        <!--begin::Thead-->
                                        <thead>
                                        <tr>
                                            <td class="m-widget11__label">
                                                #
                                            </td>
                                            <td class="m-widget11__app">
                                                Application
                                            </td>
                                            <td class="m-widget11__sales">
                                                Sales
                                            </td>
                                            <td class="m-widget11__change">
                                                Change
                                            </td>
                                            <td class="m-widget11__price">
                                                Avg Price
                                            </td>
                                            <td class="m-widget11__total m--align-right">
                                                Total
                                            </td>
                                        </tr>
                                        </thead>
                                        <!--end::Thead-->
                                        <!--begin::Tbody-->
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Loop
																		</span>
                                                <span class="m-widget11__sub">
																			CRM System
																		</span>
                                            </td>
                                            <td>
                                                19,200
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $63
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $34,740
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Selto
																		</span>
                                                <span class="m-widget11__sub">
																			Powerful Website Builder
																		</span>
                                            </td>
                                            <td>
                                                24,310
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $39
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $46,010
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Jippo
																		</span>
                                                <span class="m-widget11__sub">
																			The Best Selling App
																		</span>
                                            </td>
                                            <td>
                                                9,076
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $105
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $67,800
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                                    <input type="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
																		<span class="m-widget11__title">
																			Verto
																		</span>
                                                <span class="m-widget11__sub">
																			Web Development Tool
																		</span>
                                            </td>
                                            <td>
                                                11,094
                                            </td>
                                            <td>
                                                <div class="m-widget11__chart" style="height:50px; width: 100px">
                                                    <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                                    <canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                                </div>
                                            </td>
                                            <td>
                                                $16
                                            </td>
                                            <td class="m--align-right m--font-brand">
                                                $18,520
                                            </td>
                                        </tr>
                                        </tbody>
                                        <!--end::Tbody-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <div class="m-widget11__action m--align-right">
                                    <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">
                                        Generate Report
                                    </button>
                                </div>
                            </div>
                            <!--end::Widget 11-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Application Sales-->
        </div>
        <div class="col-xl-4">
            <!--begin:: Widgets/Latest Updates-->
            <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Latest Updates
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    Today
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
                        <div class="m-widget4__item">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-interface-3"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														Make Metronic Great Again
													</span>
                            </div>
                            <div class="m-widget4__ext">
													<span class="m-widget4__number m--font-accent">
														+500
													</span>
                            </div>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-folder-4"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														Green Maker Team
													</span>
                            </div>
                            <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															-64
														</span>
													</span>
                            </div>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-line-graph"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														Make Apex Great Again
													</span>
                            </div>
                            <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															+1080
														</span>
													</span>
                            </div>
                        </div>
                        <div class="m-widget4__item m-widget4__item--last">
                            <div class="m-widget4__ext">
                                <a href="#" class="m-widget4__icon m--font-brand">
                                    <i class="flaticon-diagram"></i>
                                </a>
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__text">
														A Programming Language
													</span>
                            </div>
                            <div class="m-widget4__ext">
													<span class="m-widget4__stats m--font-info">
														<span class="m-widget4__number m--font-accent">
															+19
														</span>
													</span>
                            </div>
                        </div>
                        <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;">
                            <canvas id="m_chart_latest_updates"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Latest Updates-->
        </div>
    </div>
    <!--End::Main Portlet-->
    <!--Begin::Main Portlet-->
    <div class="row">
        <!--Begin::Trends -->
        <div class="col-xl-4">
            <!--begin:: Widgets/Top Products-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Trends
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    All
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Widget5-->
                    <div class="m-widget4">
                        <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-10 m--margin-top-20" style="height:260px;">
                            <canvas id="m_chart_trends_stats"></canvas>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="../../assets/app/media/img/client-logos/logo3.png" alt="">
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__title">
														Phyton
													</span>
                                <br>
                                <span class="m-widget4__sub">
														A Programming Language
													</span>
                            </div>
                            <span class="m-widget4__ext">
													<span class="m-widget4__number m--font-danger">
														+$17
													</span>
												</span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="../../assets/app/media/img/client-logos/logo1.png" alt="">
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__title">
														FlyThemes
													</span>
                                <br>
                                <span class="m-widget4__sub">
														A Let's Fly Fast Again Language
													</span>
                            </div>
                            <span class="m-widget4__ext">
													<span class="m-widget4__number m--font-danger">
														+$300
													</span>
												</span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="../../assets/app/media/img/client-logos/logo2.png" alt="">
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__title">
														AirApp
													</span>
                                <br>
                                <span class="m-widget4__sub">
														Awesome App For Project Management
													</span>
                            </div>
                            <span class="m-widget4__ext">
													<span class="m-widget4__number m--font-danger">
														+$6700
													</span>
												</span>
                        </div>
                    </div>
                    <!--end::Widget 5-->
                </div>
            </div>
            <!--end:: Widgets/Top Products-->
        </div>
        <!--End::Trends CNT-->
        <!--Begin::Sales Stats-->
        <div class="col-xl-4">
            <!--begin:: Widgets/Sales Stats-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Sales Stats
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-portlet__nav-item--last m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                    <i class="fa fa-genderless m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Widget 6-->
                    <div class="m-widget15">
                        <div class="m-widget15__chart" style="height:180px;">
                            <canvas  id="m_chart_sales_stats"></canvas>
                        </div>
                        <div class="m-widget15__items">
                            <div class="row">
                                <div class="col">
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																63%
															</span>
                                        <span class="m-widget15__text">
																Sales Grow
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																54%
															</span>
                                        <span class="m-widget15__text">
																Orders Grow
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																41%
															</span>
                                        <span class="m-widget15__text">
																Profit Grow
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																79%
															</span>
                                        <span class="m-widget15__text">
																Member Grow
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget15__desc">
                            * lorem ipsum dolor sit amet consectetuer sediat elit
                        </div>
                    </div>
                    <!--end::Widget 6-->
                </div>
            </div>
            <!--end:: Widgets/Sales Stats-->
        </div>
        <!--End::Sales Stats-->
        <!--Begin::Latest Trends::-->
        <div class="col-xl-4">
            <!--begin:: Widgets/Top Locations-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Top Locations
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-portlet__nav-item--last m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                    <i class="la la-ellipsis-h m--font-info"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget15">
                        <div class="m-widget15__map m-portlet__pull-sides">
                            <div id="m_chart_latest_trends_map" style="height:340px;"></div>
                        </div>
                        <div class="m-widget15__items m--margin-top-20">
                            <div class="row">
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																63%
															</span>
                                        <span class="m-widget15__text">
																London
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																54%
															</span>
                                        <span class="m-widget15__text">
																Glasgow
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																41%
															</span>
                                        <span class="m-widget15__text">
																Dublin
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 55%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                                <div class="col">
                                    <!--begin::widget item-->
                                    <div class="m-widget15__item">
															<span class="m-widget15__stats">
																79%
															</span>
                                        <span class="m-widget15__text">
																Edinburgh
															</span>
                                        <div class="m--space-10"></div>
                                        <div class="progress m-progress--sm">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!--end::widget item-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Top Locations-->
        </div>
        <!--End::UK Trends::-->
    </div>
    <!--End::Main Portlet-->
    <!--Begin::Main Portlet-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Support Cases-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Support Cases
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget16">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="m-widget16__head">
                                    <div class="m-widget16__item">
															<span class="m-widget16__sceduled">
																Type
															</span>
                                        <span class="m-widget16__amount m--align-right">
																Amount
															</span>
                                    </div>
                                </div>
                                <div class="m-widget16__body">
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																EPS
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																+78,05%
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																PDO
															</span>
                                        <span class="m-widget16__price m--align-right m--font-accent">
																21,700
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																OPL Status
															</span>
                                        <span class="m-widget16__price m--align-right m--font-danger">
																Negative
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																Priority
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																+500,200
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																Net Prifit
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																$18,540,60
															</span>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="m-widget16__stats">
                                    <div class="m-widget16__visual">
                                        <div id="m_chart_support_tickets" style="height: 180px"></div>
                                    </div>
                                    <div class="m-widget16__legends">
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-info"></span>
                                            <span class="m-widget16__legend-text">
																	20% Margins
																</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-accent"></span>
                                            <span class="m-widget16__legend-text">
																	80% Profit
																</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                            <span class="m-widget16__legend-text">
																	10% Lost
																</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Support Stats-->
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Support Requests-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Support Requests
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget16">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="m-widget16__head">
                                    <div class="m-widget16__item">
															<span class="m-widget16__sceduled">
																Type
															</span>
                                        <span class="m-widget16__amount m--align-right">
																Amount
															</span>
                                    </div>
                                </div>
                                <div class="m-widget16__body">
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																EPS
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																+78,05%
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																PDO
															</span>
                                        <span class="m-widget16__price m--align-right m--font-accent">
																21,700
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																OPL Status
															</span>
                                        <span class="m-widget16__price m--align-right m--font-danger">
																Negative
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																Priority
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																+500,200
															</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
															<span class="m-widget16__date">
																Net Prifit
															</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">
																$18,540,60
															</span>
                                    </div>
                                    <!--end::widget item-->
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="m-widget16__stats">
                                    <div class="m-widget16__visual">
                                        <div id="m_chart_support_tickets2" class="m-widget16__chart" style="height: 180px">
                                            <div class="m-widget16__chart-number">
                                                45
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget16__legends">
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-info"></span>
                                            <span class="m-widget16__legend-text">
																	20% Margins
																</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-accent"></span>
                                            <span class="m-widget16__legend-text">
																	80% Profit
																</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                            <span class="m-widget16__legend-text">
																	10% Lost
																</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Support Requests-->
        </div>
    </div>
    <!--End::Main Portlet-->
    <!--Begin::Main Portlet-->
    <div class="row">
        <div class="col-xl-4">
            <!--begin:: Widgets/Activity-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light  m-portlet--rounded-force">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text m--font-light">
                                Activity
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                                    <i class="fa fa-genderless m--font-light"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget17">
                        <div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
                            <div class="m-widget17__chart" style="height:320px;">
                                <canvas id="m_chart_activities"></canvas>
                            </div>
                        </div>
                        <div class="m-widget17__stats">
                            <div class="m-widget17__items m-widget17__items-col1">
                                <div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-truck m--font-brand"></i>
														</span>
                                    <span class="m-widget17__subtitle">
															Delivered
														</span>
                                    <span class="m-widget17__desc">
															15 New Paskages
														</span>
                                </div>
                                <div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-paper-plane m--font-info"></i>
														</span>
                                    <span class="m-widget17__subtitle">
															Reporeted
														</span>
                                    <span class="m-widget17__desc">
															72 Support Cases
														</span>
                                </div>
                            </div>
                            <div class="m-widget17__items m-widget17__items-col2">
                                <div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-pie-chart m--font-success"></i>
														</span>
                                    <span class="m-widget17__subtitle">
															Ordered
														</span>
                                    <span class="m-widget17__desc">
															72 New Items
														</span>
                                </div>
                                <div class="m-widget17__item">
														<span class="m-widget17__icon">
															<i class="flaticon-time m--font-danger"></i>
														</span>
                                    <span class="m-widget17__subtitle">
															Arrived
														</span>
                                    <span class="m-widget17__desc">
															34 Upgraded Boxes
														</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Activity-->
        </div>
        <div class="col-xl-4">
            <!--begin:: Widgets/Inbound Bandwidth-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Inbound Bandwidth
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    Today
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Widget5-->
                    <div class="m-widget20">
                        <div class="m-widget20__number m--font-success">
                            670
                        </div>
                        <div class="m-widget20__chart" style="height:160px;">
                            <canvas id="m_chart_bandwidth1"></canvas>
                        </div>
                    </div>
                    <!--end::Widget 5-->
                </div>
            </div>
            <!--end:: Widgets/Inbound Bandwidth-->
            <div class="m--space-30"></div>
            <!--begin:: Widgets/Outbound Bandwidth-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Outbound Bandwidth
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    Today
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Widget5-->
                    <div class="m-widget20">
                        <div class="m-widget20__number m--font-warning">
                            340
                        </div>
                        <div class="m-widget20__chart" style="height:160px;">
                            <canvas id="m_chart_bandwidth2"></canvas>
                        </div>
                    </div>
                    <!--end::Widget 5-->
                </div>
            </div>
            <!--end:: Widgets/Outbound Bandwidth-->
        </div>
        <div class="col-xl-4">
            <!--begin:: Widgets/Top Products-->
            <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Top Products
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    All
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin::Widget5-->
                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="../../assets/app/media/img/client-logos/logo3.png" alt="">
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__title">
														Phyton
													</span>
                                <br>
                                <span class="m-widget4__sub">
														A Programming Language
													</span>
                            </div>
                            <span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">
														+$17
													</span>
												</span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="../../assets/app/media/img/client-logos/logo1.png" alt="">
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__title">
														FlyThemes
													</span>
                                <br>
                                <span class="m-widget4__sub">
														A Let's Fly Fast Again Language
													</span>
                            </div>
                            <span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">
														+$300
													</span>
												</span>
                        </div>
                        <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--logo">
                                <img src="../../assets/app/media/img/client-logos/logo4.png" alt="">
                            </div>
                            <div class="m-widget4__info">
													<span class="m-widget4__title">
														Starbucks
													</span>
                                <br>
                                <span class="m-widget4__sub">
														Good Coffee & Snacks
													</span>
                            </div>
                            <span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">
														+$300
													</span>
												</span>
                        </div>
                        <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:260px;">
                            <canvas id="m_chart_trends_stats_2"></canvas>
                        </div>
                    </div>
                    <!--end::Widget 5-->
                </div>
            </div>
            <!--end:: Widgets/Top Products-->
        </div>
    </div>
    <!--End::Main Portlet-->
    <!--Begin::Main Portlet-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Adwords Stats-->
            <div class="m-portlet m-portlet--full-height m-portlet--skin-light m-portlet--fit ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                AdWords Stats
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover">
                                <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                                    Today
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Quick Actions
																			</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																					Activity
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																					Messages
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																					FAQ
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																					Support
																				</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                            Cancel
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget21" style="min-height: 420px">
                        <div class="row">
                            <div class="col">
                                <div class="m-widget21__item m--pull-right">
														<span class="m-widget21__icon">
															<a href="#" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
																<i class="fa flaticon-alert-2 m--font-light"></i>
															</a>
														</span>
                                    <div class="m-widget21__info">
															<span class="m-widget21__title">
																Sales
															</span>
                                        <br>
                                        <span class="m-widget21__sub">
																IPO, Margins, Transactions
															</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col m--align-left">
                                <div class="m-widget21__item m--pull-left">
														<span class="m-widget21__icon">
															<a href="#" class="btn btn-accent m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
																<i class="fa flaticon-coins m--font-light m--font-light"></i>
															</a>
														</span>
                                    <div class="m-widget21__info">
															<span class="m-widget21__title">
																Profit
															</span>
                                        <br>
                                        <span class="m-widget21__sub">
																Expenses, Loses, Profits
															</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget21__chart m-portlet-fit--sides" style="height:310px;">
                            <canvas id="m_chart_adwords_stats"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Adwords Stats-->
        </div>
        <div class="col-xl-6">
            <!--begin:: Widgets/Quick Stats-->
            <div class="row m-row--full-height">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-brand ">
                        <div class="m-portlet__body">
                            <div class="m-widget26">
                                <div class="m-widget26__number">
                                    570
                                    <small>
                                        All Sales
                                    </small>
                                </div>
                                <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                    <canvas id="m_chart_quick_stats_1"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m--space-30"></div>
                    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-danger ">
                        <div class="m-portlet__body">
                            <div class="m-widget26">
                                <div class="m-widget26__number">
                                    690
                                    <small>
                                        All Orders
                                    </small>
                                </div>
                                <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                    <canvas id="m_chart_quick_stats_2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-success ">
                        <div class="m-portlet__body">
                            <div class="m-widget26">
                                <div class="m-widget26__number">
                                    230
                                    <small>
                                        All Transactions
                                    </small>
                                </div>
                                <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                    <canvas id="m_chart_quick_stats_3"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m--space-30"></div>
                    <div class="m-portlet m-portlet--half-height m-portlet--border-bottom-accent ">
                        <div class="m-portlet__body">
                            <div class="m-widget26">
                                <div class="m-widget26__number">
                                    470
                                    <small>
                                        All Comissions
                                    </small>
                                </div>
                                <div class="m-widget26__chart" style="height:90px; width: 220px;">
                                    <canvas id="m_chart_quick_stats_4"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Quick Stats-->
        </div>
    </div>
    <!--End::Main Portlet-->
    <!--Begin::Main Portlet-->
    <div class="row">
        <div class="col-xl-6">
            <!--begin:: Widgets/Finance Summary-->
            <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Finance Summary
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                    Month
                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                    All Time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active">
                            <div class="m-widget12 m-widget12--chart-bottom m--margin-top-10" style="min-height: 450px">
                                <div class="m-widget12__item">
														<span class="m-widget12__text1">
															Annual Companies Taxes EMS
															<br>
															<span>
																$500,000
															</span>
														</span>
                                    <span class="m-widget12__text2">
															Next Tax Review Date
															<br>
															<span>
																July 24,2017
															</span>
														</span>
                                </div>
                                <div class="m-widget12__item">
														<span class="m-widget12__text1">
															Avarage Product Price
															<br>
															<span>
																$60,70
															</span>
														</span>
                                    <div class="m-widget12__text2">
                                        <div class="m-widget12__desc">
                                            Satisfication Rate
                                        </div>
                                        <br>
                                        <div class="m-widget12__progress">
                                            <div class="m-widget12__progress-sm progress m-progress--sm">
                                                <div class="m-widget12__progress-bar progress-bar bg-brand" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="m-widget12__stats">
																	63%
																</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget12__chart m-portlet-fit--sides" style="height:290px;">
                                    <canvas id="m_chart_finance_summary"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane"></div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Finance Summary-->
        </div>
    </div>
    <!--End::Main Portlet-->
</div>
