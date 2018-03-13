<?php
header('Content-Type: application/json');

$league_id = $this->session->userdata('league_id');
if (isset($league_id)) {
    $game_events_query = $this->db->select('game_event.md5 as md5, datetime, team_1.name as team_1_name, team_2.name as team_2_name, image_1.url as team_1_logo, image_2.url as team_2_logo, venue.name as venue_name, concat(venue.address, " ", venue.city, ", ", venue.state, " ", venue.zip ) as venue_address')
        ->join('team as team_1', 'team_1.id = team_id and team_1.league_id = ' . $league_id)
        ->join('team as team_2', 'team_2.id = opponent_id')
        ->join('image as image_2', 'image_2.id = team_2.logo_id')
        ->join('image as image_1', 'image_1.id = team_1.logo_id')
        ->join('venue', 'venue_id = venue.id')
        ->order_by('datetime', 'ASC')
        ->limit(6)
        ->get('game_event');
}

if (isset($game_events_query)) {
    foreach ($game_events_query->result() as $row) {
        $data[] = array(
            'title'=>$row->team_1_name.' vs. '.$row->team_2_name,
            'id'=>$row->md5,
            'start'=>$row->datetime,
            'description'=>$row->venue_name,
            'url'=>'game/'.$row->md5,
            'className'=>'m-fc-event--primary'
        );
    }
}

echo json_encode($data);