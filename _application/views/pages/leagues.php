<?php
$user_id = $this->session->userdata('user_id');
$team_id = $this->session->userdata('team_id');
$league_id = $this->session->userdata('league_id');

$this->db->distinct();
$this->db->select('league.name as league_name, league.id as league_id')
    ->join('league', 'league.id = league_id and secretary_id ='.$user_id);
$secretaryXleague_query = $this->db->get('secretaryXleague');

$this->db->distinct();
$this->db->select('league.name as league_name, league.id as league_id')
    ->join('team', 'team.id = team_id and manager_id = '.$user_id)
    ->join('league', 'league.id = league_id');
$managerXteam_query = $this->db->get('managerXteam');

$this->db->distinct();
$this->db->select('league.name as league_name, league.id as league_id')
    ->join('team as team', 'team.id = team_id and user_id = '.$user_id)
    ->join('league', 'league.id = league_id');
$userXteam_query = $this->db->get('userXteam');

if (isset($league_id)) {
    $this->db->select('team.name as team_name, image.url as team_logo')
        ->join('league', 'team.league_id = league.id and league.id = '. $league_id)
        ->join('image', 'image.id = team.logo_id')
        ->order_by('team_name', 'ASC');
        $league_query = $this->db->get('team');
}

if (!isset($league_id)) {
    if (isset($secretaryXleague_query)) {
        $league_id = $secretaryXleague_query->row()->league_id;
    }elseif (isset($managerXteam_query)){
        $league_id = $managerXteam_query->row()->league_id;
    }elseif (isset($userXteam_query)){
        $league_id = $userXteam_query->row()->league_id;
    }
    $this->session->set_userdata('league_id', $league_id);
    redirect($this->uri->uri_string());
}
?>

<div class="m-content">
    <div class="row  ">
        <div class="col-3">
            <form class="m-form m-form--fit m-form--label-align-right" action="<?php echo base_url() ?>user/change_league/leagues" method="post">
                <div class="m-select2 m-select2--air m-select2--pill">
                    <select class="form-control m-select2" id="m_select2_leagueListing"  name="leagueListing" data-placeholder="Air & pill styles" onchange="this.form.submit();" >
                        <option></option>
                        <?php
                        if (isset($secretaryXleague_query)) {
                            echo '<optgroup label="I am secretary for...">';
                            foreach ($secretaryXleague_query->result() as $row) {
                                if ($row->league_id == $league_id) {
                                    echo '<option selected="selected" value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                } else {
                                    echo '<option value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                }
                            }
                        }

                        if (isset($managerXteam_query)) {
                            echo '<optgroup label="I manage...">';
                            foreach ($managerXteam_query->result() as $row) {
                                if ($row->league_id == $league_id) {
                                    echo '<option selected="selected" value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                } else {
                                    echo '<option value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                }
                            }
                        }

                        if (isset($userXteam_query)) {
                            echo '<optgroup label="I play for...">';
                            foreach ($userXteam_query->result() as $row) {
                                if ($row->league_id == $league_id) {
                                    echo '<option selected="selected" value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                } else {
                                    echo '<option value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                }
                            }
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div>
        <a href="manage" class="m-portlet__nav-link btn btn-secondary  m-btn m-btn--air m-btn--icon m-btn--icon-only m-btn--pill">
            <i class="flaticon-settings"></i>
        </a>
    </div>
    <div class="m--space-20"></div>
    <div class="row">
        <div class="col-xl-4">
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon"><i class="flaticon-list-3"></i></span>
                            <h3 class="m-portlet__head-text">Teams</h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-widget4">
                        <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="400" style="overflow: visible; height: 400px; max-height: 400px; position: relative;">
                        <!--begin::Widget 14 Item-->
                        <?php
                        if (isset($league_query)) {
                            foreach ($league_query->result() as $row) {
                                echo '
                                <div class="m-widget4__item">
                                    <div class="m-widget4__img m-widget4__img--pic">
                                        <img src="'.$row->team_logo.'" alt="">
                                    </div>
                                    <div class="m-widget4__info">
                                        <span class="m-widget4__title">'.$row->team_name.'</span>
                                        <br>
                                        <span class="m-widget4__sub">Team Motto...?</span>
                                    </div>
                                    <div class="m-widget4__ext">
                                        <a href="#"  class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                                    </div>
                                </div>';
                            }
                        }
                        ?>
                        <!--end::Widget 14 Item-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="m-portlet m-portlet--full-height m-portlet--bordered-semi m-portlet--rounded-force" id="m_portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon"><i class="flaticon-calendar"></i></span>
                            <h2 class="m-portlet__head-text"><span>Calendar</span></h2>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div id="m_list_calendar"></div>
                </div>
            </div>
        </div>
    </div>
</div>