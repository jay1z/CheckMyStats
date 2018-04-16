<?php
$user_id = $this->session->userdata('user_id');
$game_event_md5 = $this->session->userdata('game_event_md5');
$team_id = $this->session->userdata('team_id');
$team = $this->db->get_where('team', array('id' => $team_id))->row();
if (isset($game_event_md5)) {
    $game_event = $this->db->select('game_event.md5 as md5, game_event.datetime as datetime, team_1.name as team_1_name, team_2.name as team_2_name, venue.name as name, concat(venue.address, " ", venue.city, ", ", venue.state, " ", venue.zip ) as venue_address')
        ->join('team as team_1', 'team_id = team_1.id and game_event.md5 = "'.$game_event_md5.'"')
        ->join('team as team_2', 'opponent_id = team_2.id')
        ->join('venue', 'venue_id = venue.id')
        ->get('game_event')->row();
}
?>

<!-- begin::Body -->
<div class="m-content">
    <?php if (isset($game_event)) { ?>
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
                            <h3 class="m-portlet__head-text"><?php echo $game_event->team_1_name.' VS. '.$game_event->team_2_name; ?></h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                <span class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                    <span><?php echo '&nbsp'.$game_event->datetime; ?></span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="m_datatable" id="child_data_ajax"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets-->
        </div>
    </div>
    <?php }else{ ?>
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title">No Game Selected</h3>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<!-- end::Body -->