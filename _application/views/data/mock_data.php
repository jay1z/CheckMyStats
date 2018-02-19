<?php
if ($this->db->count_all('user') == 0) {
        echo 'ERROR: No users exist!';
        return;
    }
if ($this->session->flashdata('_ran')) {
        echo 'Returned early';
        return;
    } else {
        $this->session->set_flashdata('_ran', true);
    }

$profiles = array(
        array('fullname' => 'Jason Zurowski', 'user_id' => 1),
        array('fullname' => 'Peter Zurowski', 'user_id' => 4),
        array('fullname' => 'Test User1', 'user_id' => 2),
        array('fullname' => 'Test User2', 'user_id' => 3),
);
$this->db->insert_batch('profile', $profiles);

$type = array(
        array('type' => 'softball')
    );
$this->db->insert_batch('sport_type', $type);

$leagues = array(
        array('name' => 'East Coast League', 'is_active' => 'true', 'secretary_id' => 1),
        array('name' => 'West Coast League', 'is_active' => 'true', 'secretary_id' => 2)
    );
$this->db->insert_batch('league', $leagues);

$teams = array(
        array('name' => 'EC Ball Busters', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'EC Thunderbolts', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 4),
        array('name' => 'EC Falcons', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'EC Brewers', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 4),
        array('name' => 'EC FlimFlams', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'EC Players', 'is_active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 4),
        array('name' => 'WC Ball Busters', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 4),
        array('name' => 'WC Thunderbolts', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'WC Falcons', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 4),
        array('name' => 'WC Brewers', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'WC FlimFlams', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 4),
        array('name' => 'WC Players', 'is_active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1)
    );
$this->db->insert_batch('team', $teams);

$team_profiles = array(
    array('' => '', 'team_id' => '1'),
);

$userXteams = array(
    array('user_id' => 1, 'team_id' => 1),
    array('user_id' => 1, 'team_id' => 3),
    array('user_id' => 1, 'team_id' => 5),
    array('user_id' => 2, 'team_id' => 2),
    array('user_id' => 2, 'team_id' => 4),
    array('user_id' => 2, 'team_id' => 6),
    array('user_id' => 4, 'team_id' => 7),
    array('user_id' => 3, 'team_id' => 8),
    array('user_id' => 4, 'team_id' => 9),
    array('user_id' => 3, 'team_id' => 10),
    array('user_id' => 4, 'team_id' => 11),
    array('user_id' => 3, 'team_id' => 12),
    array('user_id' => 4, 'team_id' => 7),
    array('user_id' => 4, 'team_id' => 8),
    array('user_id' => 1, 'team_id' => 9),
    array('user_id' => 1, 'team_id' => 10),
    array('user_id' => 4, 'team_id' => 1),
    array('user_id' => 4, 'team_id' => 5),
    array('user_id' => 4, 'team_id' => 8)
);
$this->db->insert_batch('userXteam', $userXteams);

$profiles_softball = array(
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '1'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '2'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '3'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '4'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '5'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '6'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '7'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '8'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '9'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '10'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '11'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '12'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '13'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '14'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '15'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '16'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '17'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '18'),
    array('position' => 'pitcher', 'handedness' => 'right', 'jersey_number' => '24', 'userXteam_id' => '19')
);
$this->db->insert_batch('user_profile_softball', $profiles_softball);

$venues = array(
        array('name' => 'Baseball Stadium', 'address' => '123 Baseball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
        array('name' => 'Softball Stadium', 'address' => '321 Baseball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
        array('name' => 'Baseball Field', 'address' => '123 Softball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
        array('name' => 'Softball Field', 'address' => '321 Softball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139')
    );
$this->db->insert_batch('venue', $venues);

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

redirect('dashboard');
