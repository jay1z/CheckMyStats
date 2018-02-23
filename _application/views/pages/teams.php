<?php
$user_id = $this->session->userdata('id');
$team_id = $this->session->userdata('team_id');

$team = $this->db->get_where('team', array('id' => $team_id))->row();

$userXteam_query = $this->db->select('userXteam.user_id, userXteam.team_id, team.name as team_name, team.league_id, league.name as league_name')
    ->join('team', 'team_id = team.id and user_id = '.$user_id)
    ->join('league', 'league_id = league.id')
    ->get('userXteam');

if (isset($team_id)) {
    $game_events_query = $this->db->select('datetime, team.name as opponent, venue.name as venue_name, concat(venue.address, " ", venue.city, ", ", venue.state, " ", venue.zip ) as venue_address')
        ->join('team', 'opponent_id = team.id and team_id = ' . $team_id . ' and datetime >= now()')
        ->join('venue', 'venue_id = venue.id')
        ->order_by('datetime', 'ASC')
        ->limit(3)
        ->get('game_event');
}
?>


<!-- begin::Body -->
<div class="m-content">
    <!--Begin::Section-->
    <!--<div class="m-portlet">
        <div class="m-portlet__body  m-portlet__body--no-padding">-->
    <div class="col-12">
        <!--begin:: Widgets/Blog-->
        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--unair m-portlet--rounded-force">
            <div class="m-portlet__head m-portlet__head--fit">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-action">
                        <div class="col-3">
                            <form class="m-form m-form--fit m-form--label-align-right" action="user/change_team" method="post">
                                <div class="m-select2 m-select2--air m-select2--pill">
                                    <select class="form-control m-select2" id="m_select2_teamRoster"  name="teamRoster" data-placeholder="Air & pill styles" onchange="this.form.submit();" >
                                        <option></option>
                                        <?php
                                        $query_league_name = '';
                                        foreach ($userXteam_query->result() as $row){
                                            if ($row->league_name != $query_league_name){
                                                echo '<optgroup label="'.$row->league_name.'">';
                                                $query_league_name = $row->league_name;
                                            }
                                            if ($team_id == $row->team_id) {
                                                echo '<option selected="selected" value="' . $row->team_id . '">' . $row->team_name . '</option><br>';
                                            }else{
                                                echo '<option value="' . $row->team_id . '">' . $row->team_name . '</option><br>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <div class="m-widget19">
                    <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                        <?php
                        if (isset($team)){
                            $pic = $team->image;
                        }else{
                            $pic = 'user_profile_bg_bw.jpg';
                        }
                        ?>
                        <img src="assets/app/media/img/misc/<?php echo $pic; ?>" alt="">
                        <h3 class="m-widget19__title m--font-light">Team motto...maybe?</h3>
                        <div class="m-widget19__shadow"></div>
                    </div>
                    <div class="m-widget19__content">
                        <div class="m-widget19__header">
                            <div class="m-widget19__user-img">
                                <img class="m-widget19__img" src="assets/app/media/img/users/user2.jpg"
                                     alt="">
                            </div>
                            <div class="m-widget19__info">
                                <span class="m-widget19__username">Peter Zurowski</span>
                                <br>
                                <span class="m-widget19__time">Team Manager</span>
                            </div>
                            <div class="m-widget19__stats">
                                <span class="m-widget19__number m--font-brand">18</span>
                                <span class="m-widget19__comment">something</span>
                            </div>
                        </div>
                        <div class="m-widget19__body">
                            Team Mission Statement: To be the best team ever!
                        </div>
                    </div>
                    <!--<div class="m-widget19__action">
                        <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">Read More</button>
                    </div>-->
                </div>
            </div>
        </div>
        <!--end:: Widgets/Blog-->
    </div>
    <div class="row  ">
        <div class="col-xl-5">
            <!--begin:: Widgets-->
            <div class="m-portlet m-portlet--full-height  m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title"><h3 class="m-portlet__head-text">Upcoming Games</h3></div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget5">
                        <?php
                        if (isset($team)){
                            $logo = $team->logo;
                        }else{
                            $logo = '100_1.jpg';
                        }
                        if (isset($game_events_query)) {
                            foreach ($game_events_query->result() as $row) {
                                echo '
                                <div class="m-widget5__item">
                                    <div class="m-widget5__pic">                                        
                                        <img class="m-widget7__img" src="assets/app/media/img/users/'.$logo
                                    . '" alt="">
                                    </div>
                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title"><a href="#">' . $row->opponent . '</a></h4>
                                        <span class="m-widget5__desc">Team 1 motto here!</span>
                                        <div class="m-widget5__info">
                                            <span class="m-widget5__info-label">Date:</span>
                                            <span class="m-widget5__info-date m--font-info">' . date("d-m-Y", strtotime($row->datetime)) . '</span>
                                            <span class="m-widget5__author">Location:</span>
                                            <span class="m-widget5__info-author m--font-info"><a href="#">' . $row->venue_name . '</a></span>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!--end:: Widgets-->w
        </div>
        <div class="col-xl-7">
            <!--begin:: Widgets/Support Cases-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">Team Stats</h3>
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
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Activity</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
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
                                        <span class="m-widget16__sceduled">Type</span>
                                        <span class="m-widget16__amount m--align-right">Amount</span>
                                    </div>
                                </div>
                                <div class="m-widget16__body">
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">EPS</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">+78,05%</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">PDO</span>
                                        <span class="m-widget16__price m--align-right m--font-accent">21,700</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">OPL Status</span>
                                        <span class="m-widget16__price m--align-right m--font-danger">Negative</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">Priority</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">+500,200</span>
                                    </div>
                                    <!--end::widget item-->
                                    <!--begin::widget item-->
                                    <div class="m-widget16__item">
                                        <span class="m-widget16__date">Net Profit</span>
                                        <span class="m-widget16__price m--align-right m--font-brand">$18,540,60</span>
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
                                            <span class="m-widget16__legend-bullet m--bg-accent"></span>
                                            <span class="m-widget16__legend-text">7 Wins</span>
                                        </div>
                                        <div class="m-widget16__legend">
                                            <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                            <span class="m-widget16__legend-text">1 Loss(es)</span>
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
    </div>
    <div class="row  ">
        <div class="col-xl-8">
            <!--begin:: Widgets/Blog-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--unair m-portlet--rounded-force">
                <div class="m-portlet__head m-portlet__head--fit">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-action">
                            <button type="button" class="btn btn-sm m-btn--pill  btn-brand">Blog</button>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget19">
                        <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                            <img src="assets/app/media/img/blog/blog1.jpg" alt="">
                            <h3 class="m-widget19__title m--font-light">
                                Introducing New Feature
                            </h3>
                            <div class="m-widget19__shadow"></div>
                        </div>
                        <div class="m-widget19__content">
                            <div class="m-widget19__header">
                                <div class="m-widget19__user-img">
                                    <img class="m-widget19__img" src="assets/app/media/img/users/user1.jpg"
                                         alt="">
                                </div>
                                <div class="m-widget19__info">
                                                        <span class="m-widget19__username">
                                                            Anna Krox
                                                        </span>
                                    <br>
                                    <span class="m-widget19__time">
                                                            UX/UI Designer, Google
                                                        </span>
                                </div>
                                <div class="m-widget19__stats">
                                                        <span class="m-widget19__number m--font-brand">
                                                            18
                                                        </span>
                                    <span class="m-widget19__comment">
                                                            Comments
                                                        </span>
                                </div>
                            </div>
                            <div class="m-widget19__body">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                scrambled it to make text of the printing and typesetting industry scrambled
                                a type specimen book text of the dummy text of the printing printing and
                                typesetting industry scrambled dummy text of the printing.
                            </div>
                        </div>
                        <div class="m-widget19__action">
                            <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Blog-->
        </div>
        <div class="col-xl-4">
            <div class="m-portlet m-portlet--mobile m-portlet--unair">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title"><h3 class="m-portlet__head-text">Team Roster</h3></div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m_datatable" id="m_datatable_team_roster"></div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>
</div>-->
    <!--End::Section-->
    <!--Begin::Section-->
    <div class="m-portlet">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-xl-4">
                    <!--begin:: Widgets/Stats2-1 -->
                    <div class="m-widget1">
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        Member Profit
                                    </h3>
                                    <span class="m-widget1__desc">
                                                        Awerage Weekly Profit
                                                    </span>
                                </div>
                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-brand">
                                                        +$17,800
                                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        Orders
                                    </h3>
                                    <span class="m-widget1__desc">
                                                        Weekly Customer Orders
                                                    </span>
                                </div>
                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-danger">
                                                        +1,800
                                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget1__item">
                            <div class="row m-row--no-padding align-items-center">
                                <div class="col">
                                    <h3 class="m-widget1__title">
                                        Issue Reports
                                    </h3>
                                    <span class="m-widget1__desc">
                                                        System bugs and issues
                                                    </span>
                                </div>
                                <div class="col m--align-right">
                                                    <span class="m-widget1__number m--font-success">
                                                        -27,49%
                                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Stats2-1 -->
                </div>
                <div class="col-xl-4">
                    <!--begin:: Widgets/Revenue Change-->
                    <div class="m-widget14">
                        <div class="m-widget14__header">
                            <h3 class="m-widget14__title">Revenue Change</h3>
                            <span class="m-widget14__desc">Revenue change breakdown by cities</span>
                        </div>
                        <div class="row  align-items-center">
                            <div class="col">
                                <div id="m_chart_revenue_change" class="m-widget14__chart1" style="height: 180px"></div>
                            </div>
                            <div class="col">
                                <div class="m-widget14__legends">
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                        <span class="m-widget14__legend-text">+10% New York</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                        <span class="m-widget14__legend-text">-7% London</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                        <span class="m-widget14__legend-text">+20% California</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Revenue Change-->
                </div>
                <div class="col-xl-4">
                    <!--begin:: Widgets/Profit Share-->
                    <div class="m-widget14">
                        <div class="m-widget14__header">
                            <h3 class="m-widget14__title">Profit Share</h3>
                            <span class="m-widget14__desc">Profit Share between customers</span>
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
                                        <span class="m-widget14__legend-text">37% Sport Tickets</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                        <span class="m-widget14__legend-text">47% Business Events</span>
                                    </div>
                                    <div class="m-widget14__legend">
                                        <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                        <span class="m-widget14__legend-text">19% Others</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Profit Share-->
                </div>
            </div>
        </div>
    </div>
    <!--End::Section-->
    <!--Begin::Calendar Section-->
    <div class="row">
        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet " id="m_portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon"><i class="flaticon-map-location"></i></span>
                            <h3 class="m-portlet__head-text">Calendar</h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air"><span><i class="la la-plus"></i><span>Add Event</span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body ">
                    <div id="m_calendar"></div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    <!--End::Calendar Section-->
</div>
<!-- end::Body -->