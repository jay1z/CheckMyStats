<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        redirect('login');
    }

    public function login() {
        $user_login = array(
            'email' => $this->input->post('signin_email'),
            'password' => $this->input->post('signin_password')
        );

        $data = $this->user_model->login_user($user_login['email'], $user_login['password']);
        if ($data) {
            $this->session->set_userdata('id', $data->id);
            $this->session->set_userdata('email', $data->email);
            //$this->switch_role('_user');
            if ($this->agent->is_referral())
            {
                redirect($this->agent->referrer());
            }else {
                redirect(base_url());
            }
        } else {
            $this->session->set_flashdata('error_msg', 'An error has occurred, Please try again.');
            redirect('login');
        }
    }

    public function register() {
        $password = $this->input->post('signup_password');
        $pass_h = password_hash($password, PASSWORD_BCRYPT);
        $user = array(
            'email' => $this->input->post('signup_email'),
            'password' => $pass_h
        );

        $profile = array(
            'fullname' => $this->input->post('signup_fullname'),
            'user_name' => $this->input->post('signup_username')
        );

        $email_check = $this->user_model->email_check($user['email']);

        if ($email_check) {
            $this->user_model->register_user($user, $profile);
            $this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
        } else {
            $this->session->set_flashdata('error_msg', 'Error occurred, Try again.');
        }
        redirect('login', 'refresh');
    }

    public function update_profile(){
        $profile = array(
            'fullname' => $this->input->post('profile_fullname'),
            'address' => $this->input->post('profile_address'),
            'state' => $this->input->post('profile_state'),
            'city' => $this->input->post('profile_city'),
            'zip' => $this->input->post('profile_zip'),
        );

        $this->user_model->update_profile($profile);
        $this->session->set_flashdata('success_msg', 'Updated.');

        redirect('profile');
    }

    public function post_activity(){
        $post = array(
            'message' => $this->input->post('post_message'),
            'datetime' => mdate("%Y-%m-%d %H:%i:%s")
        );
        $this->user_model->insert_activity_post($post);
        redirect(base_url());
    }

    public function switch_role($role){
        $this->user_model->switch_role($role);

        redirect(base_url());
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login', 'refresh');
    }

    public function change_team(){
        $team_id = $this->input->post('teamRoster');
        $this->session->set_userdata('team_id', $team_id);
        redirect('teams');
    }

    public function change_league(){
        $league_id = $this->input->post('leagueListing');
        $this->session->set_userdata('league_id', $league_id);
        redirect('leagues');
    }

    public function create_league(){
        $league = array(
            'name' => $this->input->post('league_name'),
            'is_active' => true,
            'sport_id' => $this->input->post('sport_id')
        );
        $this->user_model->create_league($league);

        $league_id = $this->db->insert_id();
        $secretaryXleague = array(
            'secretary_id' => $this->session->userdata('id'),
            'league_id' => $league_id
        );
        $result = $this->user_model->create_secretaryXleague($secretaryXleague);

        return $result;
    }

    public function create_team(){
        $team = array(
            'name' => $this->input->post('team_name'),
            'is_active' => true,
            'league_id' => $this->input->post('league_id'),
        );
        $this->user_model->create_team($team);

        $team_id = $this->db->insert_id();
        $managerXteam = array(
            'manager_id' => $this->session->userdata('id'),
            'team_id' => $team_id
        );
        $result = $this->user_model->create_managerXteam($managerXteam);

        return $result;
    }
}
