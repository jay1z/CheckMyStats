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
            show_404();
        }

        switch ($page){
            case 'game':
                $this->session->set_userdata('game_event_md5', $id);
                break;
        }

        $ignore = array('landing', 'login', 'team_roster', 'header_nav_search', 'mock_data');
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