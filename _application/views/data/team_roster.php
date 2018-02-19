<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Content-Type: application/json");

$user_id = $this->session->userdata('id');
$team_id = $this->session->userdata('team_id');

//$team = $this->db->get_where('team', array('id' => $team_id))->row();

if (!$user_id) {
    redirect('login');
} else {
    $roster_query = $this->db->select('profile.fullname as fullname, team_profile_softball.position as position, team_profile_softball.jersey_number as jersey_number')
        ->join('profile', 'profile.user_id = userXteam.user_id and team_id = '.$team_id)
        ->join('user', 'user.id = userXteam.user_id')
        ->join('team_profile_softball', 'team_profile_softball.userXteam_id = userXteam.id')
        ->get('userXteam');
}

if (isset($roster_query)) {
    $count = $roster_query->num_rows();
    $result = '{
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": -1,
        "total": '.$count.',
        "sort": "asc",
        "field": "fullname"
    }, "data": [';

    $counter = 0;
    foreach ($roster_query->result() as $row) {
        if (++$counter != $count) {
            $result .= '{"fullname": "' . $row->fullname . '","position": "'.$row->position.'","number": "'.$row->jersey_number.'"},';
        } else {
            $result .= '{"fullname": "' . $row->fullname . '","position": "'.$row->position.'","number": "'.$row->jersey_number.'"}';
        }
    }
    $result .=']}';
}
echo $result;