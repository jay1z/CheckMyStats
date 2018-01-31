<?php
    $athlete = array('name' => 'athlete');
    $manager = array('name' => 'manager');
    $secretary = array('name' => 'secretary');

    $this->db->insert('role', $athlete, 'id = 1');
    $this->db->insert('role', $manager, 'id = 2');
    $this->db->insert('role', $secretary, 'id = 3');
?>
Success!
