<?php
    $type = array('type' => 'Softball');
    $this->db->insert('sport_type', $type);

    $leagues = array(
        array('name' => 'East Coast League', 'active' => true, 'secretary_id' => '1'),
        array('name' => 'West Coast League', 'active' => true, 'secretary_id' => '2')
    );
    $this->db->insert_batch('league', $leagues);

    $teams = array(
        array('name' => 'EC Ball Busters', 'active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'EC Thunderbolts', 'active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 2),
        array('name' => 'EC Falcons', 'active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'EC Brewers', 'active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 2),
        array('name' => 'EC FlimFlams', 'active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'EC Players', 'active' => true, 'league_id' => 1, 'sport_id' => 1, 'manager_id' => 2),
        array('name' => 'WC Ball Busters', 'active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 2),
        array('name' => 'WC Thunderbolts', 'active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'WC Falcons', 'active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 2),
        array('name' => 'WC Brewers', 'active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1),
        array('name' => 'WC FlimFlams', 'active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 2),
        array('name' => 'WC Players', 'active' => true, 'league_id' => 2, 'sport_id' => 1, 'manager_id' => 1)
    );
    $this->db->insert_batch('team', $teams);
?>
Success!
