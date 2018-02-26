<?php
//https://stackoverflow.com/questions/32732808/codeigniter-submit-form-without-refreshing-ajax
$user_id = $this->session->userdata('id');

if (!isset($sport_query)) {
    $sport_query = $this->db->get('sport_type');
}
if (!isset($league_query)) {
    $league_query = $this->db->get_where('league', array('secretary_id' => $user_id), null, null);
}
?>
<!--begin::Modal-->
<div class="modal fade" id="m_modal_new_league" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="form_createLeague"> <!--action="user/create_league" method="post"-->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create a new <strong>League</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="league_name" class="form-control-label">League Name</label>
                        <input type="text" class="form-control" id="league_name" name="league_name">
                    </div>
                    <div class="form-group">
                        <div class="m-select2 m-select2--air m-select2--pill" >
                            <select class="form-control m-select2" style="width: 300px" id="m_select2_SportSelect" name="sport_id" data-placeholder="Air & pill styles">
                                <option></option>
                                <?php
                                foreach ($sport_query->result() as $row) {
                                    echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="btn_leagueSubmit" type="reset" class="btn btn-primary" data-dismiss="modal">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->
<!--begin::Modal-->
<div class="modal fade" id="m_modal_new_team" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="form_createTeam"> <!--action="user/create_team" method="post">-->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create a new <strong>Team</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="team_name" class="form-control-label">Team Name</label>
                        <input type="text" class="form-control" id="team_name" name="team_name">
                    </div>
                    <div class="form-group">
                        <div class="m-select2 m-select2--air m-select2--pill" >
                            <select class="form-control m-select2" style="width: 300px" id="m_select2_LeagueSelect" name="league_name" data-placeholder="Air & pill styles">
                                <option></option>
                                <?php
                                foreach ($league_query->result() as $row) {
                                    echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button id="btn_teamSubmit" type="reset" class="btn btn-primary" data-dismiss="modal">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal-->