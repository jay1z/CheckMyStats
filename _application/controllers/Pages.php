<?php

class Pages extends CI_Controller {
    /*public function __construct() {
        parent::__construct();

        $this->session->set_userdata('last_page', current_url());
    }*/

    public function view($page = 'landing', $id = null) {
        $this->session->set_userdata('page', $page);
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            //show_404();


            $this->db->select('id');
            $this->db->where('url', $page);
            $user_profile = $this->db->get('user_profile')->row();

            if (isset($user_profile)){
                $this->session->set_userdata('profile_id', $user_profile->id);
                $page = 'profile';
            } else {
                $this->session->unset_userdata('profile_id');
                $page = '404';
            }
        }

        switch ($page){
            case 'game':
                $this->session->set_userdata('game_event_md5', $id);
                break;
        }

        $ignore = array('landing', 'login', 'header_nav_search', 'mock_data', 'team_roster', '404');
        if (in_array($page, $ignore)) {
            $this->load->view('pages/' . $page);
        } else {
            $this->load->view('templates/header');
            $this->load->view('pages/' . $page);
            $this->load->view('templates/modals');
            $this->load->view('templates/quick_sidebar');
            $this->load->view('templates/scroll_top');
            $this->load->view('templates/footer');
            $this->load->view('templates/javascript');
        }
    }
}