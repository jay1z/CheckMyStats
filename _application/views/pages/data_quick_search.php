<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    $query_string = $this->input->get('query', TRUE);
    $user_id = $this->session->userdata('id');

    $users = $this->db->select('*')
    ->like('fullname', $query_string, 'both')
    ->get('profile');

    $teams = $this->db->select('*')
    ->from()
    ->like('name', $query_string, 'both')
    ->get('team');

    $leagues = $this->db->select('*')
    ->from()
    ->like('name', $query_string, 'both')
    ->get('league');

    /*$teams_query = $this->db->like('name', $query_string, 'both');
    $teams = $this->db->from('team');

    $leagues_query = $this->db->like('name', $query_string, 'both');
    $leagues = $this->db->from('league');*/
?>
<div class="m-list-search__results">
	<span class="m-list-search__result-message m--hide">
		No records found
	</span>

    <span class="m-list-search__result-category">People</span>
    <?php
    if (isset($users)) {
        foreach ($users->result() as $row) {
            echo '<a href="'.urlencode($row->fullname).'" class="m-list-search__result-item">
                    <span class="m-list-search__result-item-pic">
                        <img class="m--img-rounded" src="../../../assets/app/media/img/users/user1.jpg" title=""/>
                    </span>
                    <span class="m-list-search__result-item-text">'.$row->fullname.'</span>
                  </a>';
        }
    }
    ?>

    <span class="m-list-search__result-category m-list-search__result-category--first">Teams</span>
    <?php
        if (isset($teams)) {
            foreach ($teams->result() as $row) {
                echo '<a href="'.urlencode($row->name).'" class="m-list-search__result-item">
                          <span class="m-list-search__result-item-icon"><i class="flaticon-share m--font-success"></i></span>
                          <span class="m-list-search__result-item-text">'.$row->name.'</span>
                      </a>';
            }
        }
    ?>

    <span class="m-list-search__result-category">Leagues</span>
    <?php
    if (isset($leagues)) {
        foreach ($leagues->result() as $row) {
            echo '<a href="'.urlencode($row->name).'" class="m-list-search__result-item">
                      <span class="m-list-search__result-item-icon"><i class="flaticon-calendar m--font-danger"></i></span>
                      <span class="m-list-search__result-item-text">'.$row->name.'</span>
                  </a>';
        }
    }
    ?>
</div>