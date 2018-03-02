<?php
$user_id = $this->session->userdata('id');
$game_event_id = $this->session->userdata('game_event_id');
/*$team_id = $this->session->userdata('team_id');
$team = $this->db->get_where('team', array('id' => $team_id))->row();*/
if (isset($game_event_id)) {
    /*$game_event = $this->db->get_where('game_event', array('id' => $game_event_id))->row();*/
    $game_event = $this->db->select('game_event.datetime as datetime, opponent.name as opponent_name, venue.name as name, concat(venue.address, " ", venue.city, ", ", venue.state, " ", venue.zip ) as venue_address')
        ->join('team as opponent', 'opponent_id = opponent.id and game_event.id = '.$game_event_id)
        ->join('venue', 'venue_id = venue.id')
        ->get('game_event')->row();
}
?>

<!-- begin::Body -->
<div class="m-content">
    <!--Begin::Section-->
    <!--<div class="m-portlet">
        <div class="m-portlet__body  m-portlet__body--no-padding">-->
    <div class="row  ">
        <div class="col-12">
            <!--begin:: Widgets-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                <?php if (isset($game_event)) {echo 'vs. '.$game_event->opponent_name;} ?>
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <span class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <i class="flaticon-event-calendar-symbol"><?php if (isset($game_event)) {echo '&nbsp'.$game_event->datetime;} ?></i>
                                </span>
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
            <!--end:: Widgets-->
        </div>
    </div>
</div>
<!-- end::Body -->