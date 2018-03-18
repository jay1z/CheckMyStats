<?php
$user_id = $this->session->userdata('id');
$team_id = $this->session->userdata('team_id');
if (isset($user_id)) {
    $secretary_query = $this->db->select('league.name as league_name')->join('league', 'league.id = league_id and secretary_id = ' . $user_id)->get('secretaryXleague');
    $manager_query = $this->db->select('team.name as team_name, ')->join('team', 'team.id = team_id and manager_id = ' . $user_id)->get('managerXteam');
    $player_query = $this->db->select('league.name as league_name, team.id as team_id, team.name as team_name')->join('team', 'team.id = team_id and user_id = ' . $user_id)->join('league', 'league.id = team.league_id')->get('userXteam');
}
if (isset($team_id)) {
    $managers = $this->db->select('profile.fullname as fullname, logo.url as logo_url, mXt.title as title')
        ->join('managerXteam as mXt', 'profile.user_id = mXt.manager_id and mXt.team_id = '.$team_id)
        ->join('image as logo', 'logo.id = profile.logo_id')
        ->get('user_profile as profile');

    $team = $this->db->select('team.name as name, logo.url as logo_url, bg.url as bg_url')
        ->join('image as logo', 'logo.id = logo_id and team.id = '. $team_id)
        ->join('image as bg', 'bg.id = bg_id')
        ->get('team')->row();

    $game_events_query = $this->db->select('game_event.md5, datetime, team.name as opponent_name, logo.url as logo_url, venue.name as venue_name, concat(venue.address, " ", venue.city, ", ", venue.state, " ", venue.zip ) as venue_address')
        ->join('team', 'opponent_id = team.id and team_id = ' . $team_id . ' and datetime >= now()')
        ->join('image as logo', 'logo.id = logo_id')
        ->join('venue', 'venue_id = venue.id')
        ->order_by('datetime', 'ASC')
        ->limit(3)
        ->get('game_event');
}
?>

<!-- begin::Body -->
<div class="m-content">
    <div class="row  ">
        <div class="col-3">
            <form class="m-form m-form--fit m-form--label-align-right" action="<?php echo base_url() ?>user/change_team/teams" method="post">
                            <div class="m-select2 m-select2--air m-select2--pill">
                                <select class="form-control m-select2" id="m_select2_teamRoster"  name="teamRoster" data-placeholder="Air & pill styles" onchange="this.form.submit();" >
                                    <option></option>
                                    <?php
                                    $query_league_name = '';
                                    foreach ($player_query->result() as $row){
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
    <!--Begin::Section-->
    <?php if (isset($team)){ ?>
    <div class="row  ">
        <div class="col-12">
            <!--begin:: Widgets/Blog-->
            <div class="m-portlet m-portlet--creative m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
                <div class="m-portlet__head m-portlet__head--fit">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide"><i class="flaticon-calendar"></i></span>
                            <h3 class="m-portlet__head-text"><img src="<?php echo $team->logo_url; ?>" alt=""></h3>
                            <h2 class="m-portlet__head-label m-portlet__head-label--info"><span><?php echo $team->name ?></span></h2>
                        </div>
                        <!--<div class="m-portlet__head-action">
                            <h1 class="m-widget19__title m--font-inverse-light"><?php /*if (isset($team)){echo $team->name;} */?></h1>
                        </div>-->
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget19">
                        <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                            <img src="<?php echo $team->bg_url; ?>" alt="">
                            <!--<h1 class="m-widget19__title m--font-inverse-light">
                                <img src="<?php /*echo $team->logo_url; */?>" alt="">
                                <?php /*echo $team->name; */?>
                            </h1>-->
                            <div class="m-widget19__shadow"></div>
                        </div>
                        <div class="m-widget19__content">
                            <?php foreach ($managers->result() as $row){ ?>
                            <div class="m-widget19__header">
                                <div class="m-widget19__user-img">
                                    <img class="m-widget19__img" src="<?php echo $row->logo_url; ?>" alt="">
                                </div>
                                <div class="m-widget19__info">
                                    <span class="m-widget19__username"><?php echo $row->fullname; ?></span>
                                    <br>
                                    <span class="m-widget19__time"><?php echo $row->title; ?></span>
                                </div>
                                <div class="m-widget19__stats">
                                    <span class="m-widget19__number m--font-brand">18</span>
                                    <span class="m-widget19__comment">something</span>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="m-widget19__body">
                                Team Mission Statement: To be the best team ever!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Blog-->
        </div>
    </div>
    <div class="m--space-40"></div>
    <div class="row  ">
        <div class="col-xl-5">
            <!--begin:: Widgets-->
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title"><h3 class="m-portlet__head-text">Upcoming Games</h3></div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget5">
                        <?php
                        if (isset($game_events_query)) {
                            foreach ($game_events_query->result() as $row) {
                                echo '
                                <div class="m-widget5__item">
                                    <div class="m-widget5__pic">                                        
                                        <img class="m-widget7__img" src="'.$row->logo_url.'" alt="">
                                    </div>
                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title"><a href="game/'.$row->md5.'">' .'vs. '. $row->opponent_name . '</a></h4>
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
            <!--end:: Widgets-->
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
        <div class="col-xl-7">
            <!--begin:: Widgets/Blog-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height m-portlet--rounded-force">
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
                            <img src="../../../assets/app/media/img/blog/blog1.jpg" alt="">
                            <h3 class="m-widget19__title m--font-light">
                                Introducing New Feature
                            </h3>
                            <div class="m-widget19__shadow"></div>
                        </div>
                        <div class="m-widget19__content">
                            <div class="m-widget19__header">
                                <div class="m-widget19__user-img">
                                    <img class="m-widget19__img" src="../../../assets/app/media/img/users/user1.jpg"
                                         alt="">
                                </div>
                                <div class="m-widget19__info">
                                                        <span class="m-widget19__username">
                                                            Anna Krox
                                                        </span>
                                    <br>
                                    <span class="m-widget19__time">UX/UI Designer, Google</span>
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
        <div class="col-xl-5">
            <div class="m-portlet m-portlet--mobile ">
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
    <?php } ?>
</div>
<!-- end::Body -->