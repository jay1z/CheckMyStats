<?php
$user_id = $this->session->userdata('id');

$league_id = $this->session->userdata('league_id');

$this->db->distinct();
$this->db->select('league.name as league_name, league.id as league_id')
    ->join('team', 'team.id = team_id and user_id = '.$user_id)
    ->join('league', 'league.id = league_id');
$userXteam_query = $this->db->get('userXteam');

/*if (isset($league_id)) {
    $league_query = $this->db->select('team.name as team_name, image.url as team_logo')
        ->join('league', 'team.league_id = league.id and league.id = '. $league_id)
        ->join('image', 'image.id = team.logo_id')
        ->order_by('team_name', 'ASC')
        ->get('team');
}*/

?>
<div class="m-content">
    <div class="row  ">
        <div class="col-3">
            <form class="m-form m-form--fit m-form--label-align-right" action="<?php echo base_url() ?>user/change_league" method="post">
                <div class="m-select2 m-select2--air m-select2--pill">
                    <select class="form-control m-select2" id="m_select2_leagueListing"  name="leagueListing" data-placeholder="Air & pill styles" onchange="this.form.submit();" >
                        <option></option>
                        <?php
                        foreach ($userXteam_query->result() as $row){
                            if ($row->league_id == $league_id) {
                                echo '<option selected="selected" value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                            }else{
                                echo '<option value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div>
    </div>
    <div class="m--space-40"></div>
    <div class="row">
        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force" id="m_portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title"><h3 class="m-portlet__head-text">League Calendar</h3></div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div id="m_calendar"></div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
</div>