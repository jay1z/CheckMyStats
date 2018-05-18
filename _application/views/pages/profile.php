<?php
$user_id = $this->session->userdata('user_id');
$profile_id = $this->session->userdata('profile_id');

if (!isset($profile_id) || trim($profile_id) === '') {
    $profile_id = $user_id;
    $this->session->set_userdata('profile_id', $profile_id);
}

if ($profile_id == $user_id){
    $this->load->view('pages/profile-self');
} else {
    $this->load->view('pages/profile-other');
}
