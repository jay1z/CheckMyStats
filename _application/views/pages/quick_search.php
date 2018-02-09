<?php
    $query_string = $this->input->get('query', TRUE);
    $user_id = $this->session->userdata('id');

    $this->db->select('*');
    $this->db->from('profile');
    $this->db->like('fullname', $query_string, 'both');
    $users = $this->db->get();

    /*$teams_query = $this->db->like('name', $query_string, 'both');
    $teams = $this->db->from('team');

    $leagues_query = $this->db->like('name', $query_string, 'both');
    $leagues = $this->db->from('league');*/
?>
<div class="m-list-search__results">
	<span class="m-list-search__result-message m--hide">
		No records found
	</span>

    <span class="m-list-search__result-category m-list-search__result-category--first">
		Teams
	</span>
    <?php
        if (isset($teams)) {
            foreach ($teams->result() as $row) {
                echo $row->user_id;
            }
        }
    ?>
<!--    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-icon"><i class="flaticon-interface-3 m--font-warning"></i></span>
        <span class="m-list-search__result-item-text">Team A</span>
    </a>
    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-icon"><i class="flaticon-share m--font-success"></i></span>
        <span class="m-list-search__result-item-text">Team B</span>
    </a>
    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-icon"><i class="flaticon-paper-plane m--font-info"></i></span>
        <span class="m-list-search__result-item-text">Team C</span>
    </a>-->

    <span class="m-list-search__result-category">
		People
	</span>
    <?php
    if (isset($users)) {
        foreach ($users->result() as $row) {
            //echo $row->fullname;
            echo '<a href="'.urlencode($row->fullname).'" class="m-list-search__result-item">
                    <span class="m-list-search__result-item-pic">
                        <img class="m--img-rounded" src="../../../assets/app/media/img/users/user1.jpg" title=""/>
                    </span>
                    <span class="m-list-search__result-item-text">'.$row->fullname.'</span>
                  </a>';
        }
    }
    ?>
<!--    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-pic"><img class="m--img-rounded" src="assets/app/media/img/users/user1.jpg" title=""/></span>
        <span class="m-list-search__result-item-text">Person A</span>
    </a>
    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-pic"><img class="m--img-rounded" src="assets/app/media/img/users/user2.jpg" title=""/></span>
        <span class="m-list-search__result-item-text">Person B</span>
    </a>
    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-pic"><img class="m--img-rounded" src="assets/app/media/img/users/user3.jpg" title=""/></span>
        <span class="m-list-search__result-item-text">Person C</span>
    </a>
    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-pic"><img class="m--img-rounded" src="assets/app/media/img/users/user4.jpg" title=""/></span>
        <span class="m-list-search__result-item-text">Person D</span>
    </a>-->

    <span class="m-list-search__result-category">
		Leagues
	</span>
    <?php
    if (isset($leagues)) {
        foreach ($leagues->result() as $row) {
            echo $row->name;
        }
    }
    ?>
<!--    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-icon"><i class="flaticon-lifebuoy m--font-warning"></i></span>
        <span class="m-list-search__result-item-text">League A</span>
    </a>
    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-icon"><i class="flaticon-coins m--font-primary"></i></span>
        <span class="m-list-search__result-item-text">League B</span>
    </a>
    <a href="#" class="m-list-search__result-item">
        <span class="m-list-search__result-item-icon"><i class="flaticon-calendar m--font-danger"></i></span>
        <span class="m-list-search__result-item-text">League C</span>
    </a>-->
</div>