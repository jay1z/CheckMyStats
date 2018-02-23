<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_model {
    public function register_user($user, $profile) {
        $this->db->insert('user', $user);
        $user_id = $this->db->insert_id();

        $profile['user_id'] = $user_id;
        $this->db->insert('profile', $profile);
    }

    public function login_user($email, $pass) {
        //$this->db->select('*');
        //$this->db->from('user');
        $query = $this->db->get_where('user', array('email' => $email), null, null);
        //$this->db->where('user_password', $pass);

        //$query = $this->db->get();
        $row = $query->row();
        if (isset($row)){
            $hash = $row->password;
            if (password_verify($pass, $hash)){
                return $query->row();
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function email_check($email) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function update_profile($profile){
        $id = $this->session->userdata('id');
        $this->db->update('profile', $profile, array('id' => $id));
    }

    public function insert_activity_post($post){
        $post['author_id'] = $this->session->userdata('id');
        $this->db->insert('post', $post);
    }

    public function switch_role($role){
        $this->session->set_userdata('role', $role);
    }

    public function create_league($league){
        $this->db->insert('league', $league);
    }
    public function create_team($team){
        $this->db->insert('team', $team);
    }
}