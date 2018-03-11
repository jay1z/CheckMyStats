<?php
$user_id = $this->session->userdata('id');
$team_id = $this->session->userdata('team_id');

$league_id = $this->session->userdata('league_id');

$this->db->distinct();
$this->db->select('league.name as league_name, league.id as league_id')
    ->join('team', 'team.id = team_id and user_id = '.$user_id)
    ->join('league', 'league.id = league_id');
$userXteam_query = $this->db->get('userXteam');

if (isset($league_id)) {
    $league_query = $this->db->select('team.name as team_name, image.url as team_logo')
        ->join('league', 'team.league_id = league.id and league.id = '. $league_id)
        ->join('image', 'image.id = team.logo_id')
        ->order_by('team_name', 'ASC')
        ->get('team');
}

?>
<div class="m-content">
    <div class="row  ">
        <div class="col-3">
            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                <div class="m-portlet__head m-portlet__head--fit">
                    <div class="m-portlet__head-caption">
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
            </div>
        </div>
    </div>
    <!--Begin::Main Portlet-->
    <div class="row">
        <div class="col-xl-12">
            <!--begin::Portlet-->
            <div class="m-portlet m-portlet--creative m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force" id="m_portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon m--hide"><i class="flaticon-calendar"></i></span>
                            <h3 class="m-portlet__head-text">Portlet sub title goes here</h3>
                            <h2 class="m-portlet__head-label m-portlet__head-label--info"><span>Upcoming Games</span></h2>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div id="m_calendar"></div>
                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <!--begin:: Widgets/New Users-->
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon"><i class="flaticon-list-3"></i></span>
                            <h3 class="m-portlet__head-text">Teams List</h3>
                        </div>
                        <!--<form class="m-form m-form--fit m-form--label-align-right" action="<?php /*echo base_url() */?>user/change_league" method="post">
                            <div class="m-select2 m-select2--air m-select2--pill">
                                <select class="form-control m-select2" id="m_select2_leagueListing"  name="leagueListing" data-placeholder="Air & pill styles" onchange="this.form.submit();" >
                                    <option></option>
                                    <?php
/*                                    foreach ($userXteam_query->result() as $row){
                                        if ($row->league_id == $league_id) {
                                            echo '<option selected="selected" value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                        }else{
                                            echo '<option value="' . $row->league_id . '">' . $row->league_name . '</option><br>';
                                        }
                                    }
                                    */?>
                                </select>
                            </div>
                        </form>-->
                    </div>
                    <!--<div class="m-portlet__head-tools">
                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">Today</a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">Month</a>
                            </li>
                        </ul>
                    </div>-->
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget4_tab1_content">
                            <!--begin::Widget 14-->
                            <div class="m-widget4">
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
                                                <span class="m-widget4__sub">Visual Designer,Google Inc</span>
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
                            <!--end::Widget 14-->
                        </div>
                        <div class="tab-pane" id="m_widget4_tab2_content">
                            <!--begin::Widget 14-->
                            <div class="m-widget4">
                            </div>
                            <!--end::Widget 14-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/New Users-->
        </div>
    </div>
    <!--End::Main Portlet-->
</div>