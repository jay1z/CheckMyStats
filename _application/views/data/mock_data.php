<?php

if ($this->db->count_all('user') == 0) {
    echo 'ERROR: No users exist!';
    return;
}
$loaded = array('users');
if ($this->session->flashdata('_ran')) {
    echo 'Returned early';
    return;
} else {
    $this->session->set_flashdata('_ran', true);
}

$user_profiles = array(
    array('fullname' => 'Jason Zurowski', 'user_id' => 1),
    array('fullname' => 'Peter Zurowski', 'user_id' => 4),
    array('fullname' => 'Test User1', 'user_id' => 2),
    array('fullname' => 'Test User2', 'user_id' => 3),
);
$this->db->insert_batch('user_profile', $user_profiles);
array_push($loaded, 'profiles');

$type = array(
    array('type' => 'softball')
);
$this->db->insert_batch('sport_type', $type);
array_push($loaded, 'sport_types');

$leagues = array(
    array('name' => 'East Coast League', 'is_active' => 'true', 'secretary_id' => 1),
    array('name' => 'West Coast League', 'is_active' => 'true', 'secretary_id' => 2)
);
$this->db->insert_batch('league', $leagues);
array_push($loaded, 'leagues');

$teams = array(
    array('name' => 'EC Ball Busters', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1, 'logo' => 'logo_1', 'image' => 'user_profile_bg_softball_1.jpg'),
    array('name' => 'EC Thunderbolts', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 4, 'logo' => 'logo_2', 'image' => 'user_profile_bg_softball_2.jpg'),
    array('name' => 'EC Falcons', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1, 'logo' => 'logo_1', 'image' => 'user_profile_bg_softball_1.jpg'),
    array('name' => 'EC Wolves', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 4, 'logo' => 'logo_2', 'image' => 'user_profile_bg_softball_2.jpg'),
    array('name' => 'EC FlimFlams', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1, 'logo' => 'logo_1', 'image' => 'user_profile_bg_softball_1.jpg'),
    array('name' => 'EC Players', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 4, 'logo' => 'logo_2', 'image' => 'user_profile_bg_softball_2.jpg'),
    array('name' => 'WC Ball Busters', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 4, 'logo' => 'logo_1', 'image' => 'user_profile_bg_softball_1.jpg'),
    array('name' => 'WC Thunderbolts', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1, 'logo' => 'logo_2', 'image' => 'user_profile_bg_softball_2.jpg'),
    array('name' => 'WC Falcons', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 4, 'logo' => 'logo_1', 'image' => 'user_profile_bg_softball_1.jpg'),
    array('name' => 'WC Wolves', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1, 'logo' => 'logo_2', 'image' => 'user_profile_bg_softball_2.jpg'),
    array('name' => 'WC FlimFlams', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 4, 'logo' => 'logo_1', 'image' => 'user_profile_bg_softball_1.jpg'),
    array('name' => 'WC Players', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1, 'logo' => 'logo_2', 'image' => 'user_profile_bg_softball_2.jpg')
);
$this->db->insert_batch('team', $teams);
array_push($loaded, 'teams');

$userXteams = array(
    array('user_id' => 1, 'team_id' => 1, 'position' => 'First Base', 'handedness' => 'right', 'jersey' => '24'),
    array('user_id' => 1, 'team_id' => 3, 'position' => 'Catcher', 'handedness' => 'left', 'jersey' => '23'),
    array('user_id' => 1, 'team_id' => 5, 'position' => 'Pitcher', 'handedness' => 'right', 'jersey' => '22'),
    array('user_id' => 2, 'team_id' => 2, 'position' => 'Second Base', 'handedness' => 'left', 'jersey' => '21'),
    array('user_id' => 2, 'team_id' => 4, 'position' => 'Left Field', 'handedness' => 'right', 'jersey' => '20'),
    array('user_id' => 2, 'team_id' => 6, 'position' => 'Center Field', 'handedness' => 'left', 'jersey' => '19'),
    array('user_id' => 4, 'team_id' => 7, 'position' => 'Right Field', 'handedness' => 'right', 'jersey' => '18'),
    array('user_id' => 3, 'team_id' => 8, 'position' => 'Third Base', 'handedness' => 'left', 'jersey' => '17'),
    array('user_id' => 4, 'team_id' => 9, 'position' => 'Water Boy', 'handedness' => 'right', 'jersey' => '16'),
    array('user_id' => 3, 'team_id' => 10, 'position' => 'First Base', 'handedness' => 'left', 'jersey' => '15'),
    array('user_id' => 4, 'team_id' => 11, 'position' => 'Catcher', 'handedness' => 'right', 'jersey' => '14'),
    array('user_id' => 3, 'team_id' => 12, 'position' => 'Pitcher', 'handedness' => 'left', 'jersey' => '13'),
    array('user_id' => 4, 'team_id' => 7, 'position' => 'Second Base', 'handedness' => 'right', 'jersey' => '12'),
    array('user_id' => 4, 'team_id' => 8, 'position' => 'Left Field', 'handedness' => 'left', 'jersey' => '11'),
    array('user_id' => 1, 'team_id' => 9, 'position' => 'Center Field', 'handedness' => 'right', 'jersey' => '10'),
    array('user_id' => 1, 'team_id' => 10, 'position' => 'Right Field', 'handedness' => 'left', 'jersey' => '09'),
    array('user_id' => 4, 'team_id' => 1, 'position' => 'Third Base', 'handedness' => 'right', 'jersey' => '08'),
    array('user_id' => 4, 'team_id' => 5, 'position' => 'Water Boy', 'handedness' => 'left', 'jersey' => '07'),
    array('user_id' => 4, 'team_id' => 8, 'position' => 'Pitcher', 'handedness' => 'right', 'jersey' => '06')
);
$this->db->insert_batch('userXteam', $userXteams);
array_push($loaded, 'userXteams');

$venues = array(
    array('name' => 'Baseball Stadium', 'address' => '123 Baseball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
    array('name' => 'Softball Stadium', 'address' => '321 Baseball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
    array('name' => 'Baseball Field', 'address' => '123 Softball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
    array('name' => 'Softball Field', 'address' => '321 Softball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139')
);
$this->db->insert_batch('venue', $venues);
array_push($loaded, 'venues');

$game_events = array(
    array('datetime' => date("2018-03-01 14:00"), 'team_id' => '1', 'opponent_id' => '2', 'venue_id' => '1'),
    array('datetime' => date("2018-03-01 16:00"), 'team_id' => '1', 'opponent_id' => '3', 'venue_id' => '2'),
    array('datetime' => date("2018-03-01 18:00"), 'team_id' => '1', 'opponent_id' => '4', 'venue_id' => '3'),
    array('datetime' => date("2018-03-01 20:00"), 'team_id' => '1', 'opponent_id' => '5', 'venue_id' => '4'),
    array('datetime' => date("2018-03-01 22:00"), 'team_id' => '1', 'opponent_id' => '6', 'venue_id' => '1'),
    array('datetime' => date("2018-03-02 14:00"), 'team_id' => '2', 'opponent_id' => '1', 'venue_id' => '2'),
    array('datetime' => date("2018-03-02 16:00"), 'team_id' => '2', 'opponent_id' => '3', 'venue_id' => '3'),
    array('datetime' => date("2018-03-02 18:00"), 'team_id' => '2', 'opponent_id' => '4', 'venue_id' => '4'),
    array('datetime' => date("2018-03-02 20:00"), 'team_id' => '2', 'opponent_id' => '5', 'venue_id' => '1'),
    array('datetime' => date("2018-03-02 22:00"), 'team_id' => '2', 'opponent_id' => '6', 'venue_id' => '2'),
    array('datetime' => date("2018-03-03 14:00"), 'team_id' => '3', 'opponent_id' => '1', 'venue_id' => '3'),
    array('datetime' => date("2018-03-03 16:00"), 'team_id' => '3', 'opponent_id' => '2', 'venue_id' => '4'),
    array('datetime' => date("2018-03-03 18:00"), 'team_id' => '3', 'opponent_id' => '4', 'venue_id' => '1'),
    array('datetime' => date("2018-03-03 20:00"), 'team_id' => '3', 'opponent_id' => '5', 'venue_id' => '2'),
    array('datetime' => date("2018-03-03 22:00"), 'team_id' => '3', 'opponent_id' => '6', 'venue_id' => '3'),
    array('datetime' => date("2018-03-04 14:00"), 'team_id' => '4', 'opponent_id' => '1', 'venue_id' => '4'),
    array('datetime' => date("2018-03-04 16:00"), 'team_id' => '4', 'opponent_id' => '2', 'venue_id' => '1'),
    array('datetime' => date("2018-03-04 18:00"), 'team_id' => '4', 'opponent_id' => '3', 'venue_id' => '2'),
    array('datetime' => date("2018-03-04 20:00"), 'team_id' => '4', 'opponent_id' => '5', 'venue_id' => '3'),
    array('datetime' => date("2018-03-04 22:00"), 'team_id' => '4', 'opponent_id' => '6', 'venue_id' => '4'),
    array('datetime' => date("2018-03-05 14:00"), 'team_id' => '5', 'opponent_id' => '1', 'venue_id' => '1'),
    array('datetime' => date("2018-03-05 16:00"), 'team_id' => '5', 'opponent_id' => '2', 'venue_id' => '2'),
    array('datetime' => date("2018-03-05 18:00"), 'team_id' => '5', 'opponent_id' => '3', 'venue_id' => '3'),
    array('datetime' => date("2018-03-05 20:00"), 'team_id' => '5', 'opponent_id' => '4', 'venue_id' => '4'),
    array('datetime' => date("2018-03-05 22:00"), 'team_id' => 5, 'opponent_id' => '6', 'venue_id' => '1'),
    array('datetime' => date("2018-03-06 14:00"), 'team_id' => 6, 'opponent_id' => '1', 'venue_id' => '2'),
    array('datetime' => date("2018-03-06 16:00"), 'team_id' => 6, 'opponent_id' => '2', 'venue_id' => '3'),
    array('datetime' => date("2018-03-06 18:00"), 'team_id' => 6, 'opponent_id' => 3, 'venue_id' => 4),
    array('datetime' => date("2018-03-06 20:00"), 'team_id' => 6, 'opponent_id' => 4, 'venue_id' => 1),
    array('datetime' => date("2018-03-06 22:00"), 'team_id' => 6, 'opponent_id' => 5, 'venue_id' => 2),
    array('datetime' => date("2018-03-07 14:00"), 'team_id' => 1, 'opponent_id' => 2, 'venue_id' => 3),
    array('datetime' => date("2018-03-07 16:00"), 'team_id' => 1, 'opponent_id' => 3, 'venue_id' => 4),
    array('datetime' => date("2018-03-07 18:00"), 'team_id' => 1, 'opponent_id' => 4, 'venue_id' => 1),
    array('datetime' => date("2018-03-07 20:00"), 'team_id' => 1, 'opponent_id' => 5, 'venue_id' => 2),
    array('datetime' => date("2018-03-07 22:00"), 'team_id' => 1, 'opponent_id' => 6, 'venue_id' => 3),
    array('datetime' => date("2018-03-08 14:00"), 'team_id' => 2, 'opponent_id' => 1, 'venue_id' => 4),
    array('datetime' => date("2018-03-08 16:00"), 'team_id' => 2, 'opponent_id' => 3, 'venue_id' => 1),
    array('datetime' => date("2018-03-08 18:00"), 'team_id' => 2, 'opponent_id' => 4, 'venue_id' => 2),
    array('datetime' => date("2018-03-08 20:00"), 'team_id' => 2, 'opponent_id' => 5, 'venue_id' => 3),
    array('datetime' => date("2018-03-08 22:00"), 'team_id' => 2, 'opponent_id' => 6, 'venue_id' => 4),
    array('datetime' => date("2018-03-09 14:00"), 'team_id' => 3, 'opponent_id' => 1, 'venue_id' => 1),
    array('datetime' => date("2018-03-09 16:00"), 'team_id' => 3, 'opponent_id' => 2, 'venue_id' => 2),
    array('datetime' => date("2018-03-09 18:00"), 'team_id' => 3, 'opponent_id' => 4, 'venue_id' => 3),
    array('datetime' => date("2018-03-09 20:00"), 'team_id' => 3, 'opponent_id' => 5, 'venue_id' => 4),
    array('datetime' => date("2018-03-09 22:00"), 'team_id' => 3, 'opponent_id' => 6, 'venue_id' => 1),
    array('datetime' => date("2018-03-10 14:00"), 'team_id' => 4, 'opponent_id' => 1, 'venue_id' => 2),
    array('datetime' => date("2018-03-10 16:00"), 'team_id' => 4, 'opponent_id' => 2, 'venue_id' => 3),
    array('datetime' => date("2018-03-10 18:00"), 'team_id' => 4, 'opponent_id' => 3, 'venue_id' => 4),
    array('datetime' => date("2018-03-10 20:00"), 'team_id' => 4, 'opponent_id' => 5, 'venue_id' => 1),
    array('datetime' => date("2018-03-10 22:00"), 'team_id' => 4, 'opponent_id' => 6, 'venue_id' => 2),
    array('datetime' => date("2018-03-11 14:00"), 'team_id' => 5, 'opponent_id' => 1, 'venue_id' => 3),
    array('datetime' => date("2018-03-11 16:00"), 'team_id' => 5, 'opponent_id' => 2, 'venue_id' => 4),
    array('datetime' => date("2018-03-11 18:00"), 'team_id' => 5, 'opponent_id' => 3, 'venue_id' => 1),
    array('datetime' => date("2018-03-11 20:00"), 'team_id' => 5, 'opponent_id' => 4, 'venue_id' => 2),
    array('datetime' => date("2018-03-11 22:00"), 'team_id' => 5, 'opponent_id' => 6, 'venue_id' => 3),
    array('datetime' => date("2018-03-12 14:00"), 'team_id' => 6, 'opponent_id' => 1, 'venue_id' => 4),
    array('datetime' => date("2018-03-12 16:00"), 'team_id' => 6, 'opponent_id' => 2, 'venue_id' => 1),
    array('datetime' => date("2018-03-12 18:00"), 'team_id' => 6, 'opponent_id' => 3, 'venue_id' => 2),
    array('datetime' => date("2018-03-12 20:00"), 'team_id' => 6, 'opponent_id' => 4, 'venue_id' => 3),
    array('datetime' => date("2018-03-12 22:00"), 'team_id' => 6, 'opponent_id' => 5, 'venue_id' => 4)
);
$this->db->insert_batch('game_event', $game_events);
array_push($loaded, 'game_events');

?>
Success!