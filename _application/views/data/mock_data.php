<?php

if ($this->db->count_all('user') == 0) {
    echo 'ERROR: No users exist!';
    return;
}
$loaded = array('users');
/*if ($this->session->flashdata('_ran')) {
    echo 'Returned early';
    return;
} else {
    $this->session->set_flashdata('_ran', true);
}*/

$images = array(
    //Default Team 1-2
    array('url' => '../../../assets/app/media/img/client-logos/logo3.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_bw.jpg', 'uploaded_id' => 1),
    //Default League 3-4
    array('url' => '../../../assets/app/media/img/logos/logo-2.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_3x.jpg', 'uploaded_id' => 1),
    //Users 5-12
    array('url' => '../../../assets/app/media/img/users/100_1.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_3x2.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/users/100_2.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_3x2.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/users/100_3.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_3x2.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/users/100_4.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_3x2.jpg', 'uploaded_id' => 1),
    //Leagues 13-16
    array('url' => '../../../assets/app/media/img/logos/logo-1.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/bg/bg-1.jpg', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/logos/logo-2.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/bg/bg-2.jpg', 'uploaded_id' => 1),
    //Teams 17-40
    array('url' => '../../../assets/app/media/img/client-logos/logo1.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_1.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo2.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_2.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo3.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_1.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo4.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_2.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo5.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_1.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo1.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_2.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo2.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_1.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo3.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_2.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo4.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_1.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo5.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_2.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo1.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_1.jpg' , 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/client-logos/logo2.png', 'uploaded_id' => 1),
    array('url' => '../../../assets/app/media/img/misc/user_profile_bg_softball_2.jpg' , 'uploaded_id' => 1)
);
$this->db->insert_batch('image', $images);
array_push($loaded, 'images');

$user_profiles = array(
    array('fullname' => 'Jason Zurowski', 'user_name' => 'jay1_z', 'user_id' => 1, 'logo_id' => 5, 'bg_id' => 6)/*,
    array('fullname' => 'Bob Player', 'user_name' => 'b_player', 'user_id' => 2, 'logo_id' => 3, 'bg_id' => 4),
    array('fullname' => 'Joe Player', 'user_name' => 'j_player', 'user_id' => 3, 'logo_id' => 5, 'bg_id' => 6),
    array('fullname' => 'Peter Zurowski', 'user_name' => 'PJ06', 'user_id' => 4, 'logo_id' => 7, 'bg_id' => 8)*/
);
$this->db->insert_batch('user_profile', $user_profiles);
array_push($loaded, 'profiles');

$sport_types = array(
    array('name' => 'Softball')
);
$this->db->insert_batch('sport_type', $sport_types);
array_push($loaded, 'sport_types');

$leagues = array(
    array('name' => 'East Coast League', 'is_active' => true, 'sport_id' => 1, 'logo_id' => 13, 'bg_id' => 14),
    array('name' => 'West Coast League', 'is_active' => true, 'sport_id' => 1, 'logo_id' => 15, 'bg_id' => 16)
);
$this->db->insert_batch('league', $leagues);
array_push($loaded, 'leagues');

$secretaryXleagues = array(
    array('league_id' => 1, 'secretary_id' => 1),
    array('league_id' => 1, 'secretary_id' => 1),
    array('league_id' => 2, 'secretary_id' => 1),
    array('league_id' => 2, 'secretary_id' => 1)
);
$this->db->insert_batch('secretaryXleague', $secretaryXleagues);
array_push($loaded, 'secretaryXleagues');

$teams = array(
    array('name' => 'EC Ball Busters', 'is_active' => true, 'league_id' => 1, 'logo_id' => 17, 'bg_id' => 18),
    array('name' => 'EC Thunderbolts', 'is_active' => true, 'league_id' => 1, 'logo_id' => 19, 'bg_id' => 20),
    array('name' => 'EC Falcons', 'is_active' => true, 'league_id' => 1, 'logo_id' => 21, 'bg_id' => 22),
    array('name' => 'EC Wolves', 'is_active' => true, 'league_id' => 1, 'logo_id' => 23, 'bg_id' => 24),
    array('name' => 'EC FlimFlams', 'is_active' => true, 'league_id' => 1, 'logo_id' => 25, 'bg_id' => 26),
    array('name' => 'EC Players', 'is_active' => true, 'league_id' => 1, 'logo_id' => 27, 'bg_id' => 28),
    array('name' => 'WC Ball Busters', 'is_active' => true, 'league_id' => 2, 'logo_id' => 29, 'bg_id' => 30),
    array('name' => 'WC Thunderbolts', 'is_active' => true, 'league_id' => 2, 'logo_id' => 31, 'bg_id' => 32),
    array('name' => 'WC Falcons', 'is_active' => true, 'league_id' => 2, 'logo_id' => 33, 'bg_id' => 34),
    array('name' => 'WC Wolves', 'is_active' => true, 'league_id' => 2, 'logo_id' => 35, 'bg_id' => 36),
    array('name' => 'WC FlimFlams', 'is_active' => true, 'league_id' => 2, 'logo_id' => 37, 'bg_id' => 38),
    array('name' => 'WC Players', 'is_active' => true, 'league_id' => 2, 'logo_id' => 39, 'bg_id' => 40)
);
$this->db->insert_batch('team', $teams);
array_push($loaded, 'teams');

$userXteams = array(
    array('user_id' => 1, 'team_id' => 1, 'position' => 'First Base', 'handedness' => 'right', 'jersey' => '24'),
    array('user_id' => 1, 'team_id' => 3, 'position' => 'Catcher', 'handedness' => 'left', 'jersey' => '23'),
    array('user_id' => 1, 'team_id' => 5, 'position' => 'Pitcher', 'handedness' => 'right', 'jersey' => '22'),
    array('user_id' => 1, 'team_id' => 2, 'position' => 'Second Base', 'handedness' => 'left', 'jersey' => '21'),
    array('user_id' => 1, 'team_id' => 4, 'position' => 'Left Field', 'handedness' => 'right', 'jersey' => '20'),
    array('user_id' => 1, 'team_id' => 6, 'position' => 'Center Field', 'handedness' => 'left', 'jersey' => '19'),
    array('user_id' => 1, 'team_id' => 7, 'position' => 'Right Field', 'handedness' => 'right', 'jersey' => '18'),
    array('user_id' => 1, 'team_id' => 8, 'position' => 'Third Base', 'handedness' => 'left', 'jersey' => '17'),
    array('user_id' => 1, 'team_id' => 9, 'position' => 'Water Boy', 'handedness' => 'right', 'jersey' => '16'),
    array('user_id' => 1, 'team_id' => 10, 'position' => 'First Base', 'handedness' => 'left', 'jersey' => '15'),
    array('user_id' => 1, 'team_id' => 11, 'position' => 'Catcher', 'handedness' => 'right', 'jersey' => '14'),
    array('user_id' => 1, 'team_id' => 12, 'position' => 'Pitcher', 'handedness' => 'left', 'jersey' => '13'),
    array('user_id' => 1, 'team_id' => 7, 'position' => 'Second Base', 'handedness' => 'right', 'jersey' => '12'),
    array('user_id' => 1, 'team_id' => 8, 'position' => 'Left Field', 'handedness' => 'left', 'jersey' => '11'),
    array('user_id' => 1, 'team_id' => 9, 'position' => 'Center Field', 'handedness' => 'right', 'jersey' => '10'),
    array('user_id' => 1, 'team_id' => 10, 'position' => 'Right Field', 'handedness' => 'left', 'jersey' => '09'),
    array('user_id' => 1, 'team_id' => 1, 'position' => 'Third Base', 'handedness' => 'right', 'jersey' => '08'),
    array('user_id' => 1, 'team_id' => 5, 'position' => 'Water Boy', 'handedness' => 'left', 'jersey' => '07'),
    array('user_id' => 1, 'team_id' => 8, 'position' => 'Pitcher', 'handedness' => 'right', 'jersey' => '06')
);
$this->db->insert_batch('userXteam', $userXteams);
array_push($loaded, 'userXteams');

$managerXteams = array(
    array('team_id' => 1, 'manager_id' => 1),
    array('team_id' => 1, 'manager_id' => 1),
    array('team_id' => 2, 'manager_id' => 1),
    array('team_id' => 2, 'manager_id' => 1),
    array('team_id' => 3, 'manager_id' => 1),
    array('team_id' => 3, 'manager_id' => 1),
    array('team_id' => 4, 'manager_id' => 1),
    array('team_id' => 4, 'manager_id' => 1),
    array('team_id' => 5, 'manager_id' => 1),
    array('team_id' => 5, 'manager_id' => 1),
    array('team_id' => 6, 'manager_id' => 1),
    array('team_id' => 6, 'manager_id' => 1),
    array('team_id' => 7, 'manager_id' => 1),
    array('team_id' => 7, 'manager_id' => 1),
    array('team_id' => 8, 'manager_id' => 1),
    array('team_id' => 8, 'manager_id' => 1),
    array('team_id' => 9, 'manager_id' => 1),
    array('team_id' => 9, 'manager_id' => 1),
    array('team_id' => 10, 'manager_id' => 1),
    array('team_id' => 10, 'manager_id' => 1),
    array('team_id' => 11, 'manager_id' => 1),
    array('team_id' => 11, 'manager_id' => 1),
    array('team_id' => 12, 'manager_id' => 1),
    array('team_id' => 12, 'manager_id' => 1),
);
$this->db->insert_batch('managerXteam', $managerXteams);
array_push($loaded, 'managerXteams');

$venues = array(
    array('name' => 'Baseball Stadium', 'address' => '123 Baseball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
    array('name' => 'Softball Stadium', 'address' => '321 Baseball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
    array('name' => 'Baseball Field', 'address' => '123 Softball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139'),
    array('name' => 'Softball Field', 'address' => '321 Softball Street', 'city' => 'Solon', 'state' => 'Ohio', 'zip' => '44139')
);
$this->db->insert_batch('venue', $venues);
array_push($loaded, 'venues');

$random_type = 'md5';
$random_length = 32;
$game_events = array(
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-01 14:00"), 'team_id' => 6, 'opponent_id' => 2, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-01 16:00"), 'team_id' => 5, 'opponent_id' => 3, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-01 18:00"), 'team_id' => 4, 'opponent_id' => 4, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-01 20:00"), 'team_id' => 3, 'opponent_id' => 5, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-01 22:00"), 'team_id' => 2, 'opponent_id' => 6, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-02 14:00"), 'team_id' => 2, 'opponent_id' => 1, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-02 16:00"), 'team_id' => 4, 'opponent_id' => 3, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-02 18:00"), 'team_id' => 5, 'opponent_id' => 4, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-02 20:00"), 'team_id' => 1, 'opponent_id' => 5, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-02 22:00"), 'team_id' => 3, 'opponent_id' => 6, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-03 14:00"), 'team_id' => 6, 'opponent_id' => 1, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-03 16:00"), 'team_id' => 5, 'opponent_id' => 2, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-03 18:00"), 'team_id' => 3, 'opponent_id' => 4, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-03 20:00"), 'team_id' => 5, 'opponent_id' => 5, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-03 22:00"), 'team_id' => 2, 'opponent_id' => 6, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-04 14:00"), 'team_id' => 5, 'opponent_id' => 1, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-04 16:00"), 'team_id' => 4, 'opponent_id' => 2, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-04 18:00"), 'team_id' => 2, 'opponent_id' => 3, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-04 20:00"), 'team_id' => 1, 'opponent_id' => 5, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-04 22:00"), 'team_id' => 4, 'opponent_id' => 6, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-05 14:00"), 'team_id' => 5, 'opponent_id' => 1, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-05 16:00"), 'team_id' => 4, 'opponent_id' => 2, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-05 18:00"), 'team_id' => 2, 'opponent_id' => 3, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-05 20:00"), 'team_id' => 6, 'opponent_id' => 4, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-05 22:00"), 'team_id' => 5, 'opponent_id' => 6, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-06 14:00"), 'team_id' => 6, 'opponent_id' => 1, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-06 16:00"), 'team_id' => 6, 'opponent_id' => 2, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-06 18:00"), 'team_id' => 6, 'opponent_id' => 3, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-06 20:00"), 'team_id' => 6, 'opponent_id' => 4, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-06 22:00"), 'team_id' => 6, 'opponent_id' => 5, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-07 14:00"), 'team_id' => 1, 'opponent_id' => 2, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-07 16:00"), 'team_id' => 1, 'opponent_id' => 3, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-07 18:00"), 'team_id' => 1, 'opponent_id' => 4, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-07 20:00"), 'team_id' => 1, 'opponent_id' => 5, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-07 22:00"), 'team_id' => 1, 'opponent_id' => 6, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-08 14:00"), 'team_id' => 2, 'opponent_id' => 1, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-08 16:00"), 'team_id' => 2, 'opponent_id' => 3, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-08 18:00"), 'team_id' => 2, 'opponent_id' => 4, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-08 20:00"), 'team_id' => 2, 'opponent_id' => 5, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-08 22:00"), 'team_id' => 2, 'opponent_id' => 6, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-09 14:00"), 'team_id' => 3, 'opponent_id' => 1, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-09 16:00"), 'team_id' => 3, 'opponent_id' => 2, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-09 18:00"), 'team_id' => 3, 'opponent_id' => 4, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-09 20:00"), 'team_id' => 3, 'opponent_id' => 5, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-09 22:00"), 'team_id' => 3, 'opponent_id' => 6, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-10 14:00"), 'team_id' => 4, 'opponent_id' => 1, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-10 16:00"), 'team_id' => 4, 'opponent_id' => 2, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-10 18:00"), 'team_id' => 4, 'opponent_id' => 3, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-10 20:00"), 'team_id' => 4, 'opponent_id' => 5, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-10 22:00"), 'team_id' => 4, 'opponent_id' => 6, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-11 14:00"), 'team_id' => 5, 'opponent_id' => 1, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-11 16:00"), 'team_id' => 5, 'opponent_id' => 2, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-11 18:00"), 'team_id' => 5, 'opponent_id' => 3, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-11 20:00"), 'team_id' => 5, 'opponent_id' => 4, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-11 22:00"), 'team_id' => 5, 'opponent_id' => 6, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-12 14:00"), 'team_id' => 6, 'opponent_id' => 1, 'venue_id' => 4),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-12 16:00"), 'team_id' => 6, 'opponent_id' => 2, 'venue_id' => 1),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-12 18:00"), 'team_id' => 6, 'opponent_id' => 3, 'venue_id' => 2),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-12 20:00"), 'team_id' => 6, 'opponent_id' => 4, 'venue_id' => 3),
    array('md5' => random_string($random_type, $random_length), 'datetime' => date("2018-03-12 22:00"), 'team_id' => 6, 'opponent_id' => 5, 'venue_id' => 4)
);
$this->db->insert_batch('game_event', $game_events);
array_push($loaded, 'game_events');

/*$game_softball_stats = array(
    array('1B' => 4, '2B' => 3, '3B' => 2, 'AB' => 12, 'BB' => 1, 'BI' => 2, 'H' => 12, 'HR' => 2, 'R' => 4, 'signature_id' => 1, 'game_event_md5' => 61),
    array('1B' => 2, '2B' => 3, '3B' => 4, 'AB' => 10, 'BB' => 1, 'BI' => 1, 'H' => 10, 'HR' => 1, 'R' => 0, 'signature_id' => 1, 'game_event_md5' => 62)
);
$this->db->insert_batch('game_softball_stats', $game_softball_stats);
array_push($loaded, '9-game_softball_stats');*/

print_r($loaded);
?>
Success!
