<?php
$profile_id = $this->session->userdata('profile_id');

$this->db->select('id, fullname, address, state, city, zip');
$this->db->where('user_id', $profile_id);
$current_profile = $this->db->get('user_profile')->row();

echo $current_profile->fullname;
