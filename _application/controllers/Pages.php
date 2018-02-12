<?php

class Pages extends CI_Controller {
    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $ignore = array('home', 'login', 'quick_search', 'data_team_roster');
        if (in_array($page, $ignore)) {
            $this->load->view('pages/' . $page);
        } else {
            $this->load->view('templates/header');
            //$this->load->view('templates/page_header');
            $this->load->view('pages/' . $page);
            //$this->load->view('templates/page_footer');
            $this->load->view('templates/quick_sidebar');
            $this->load->view('templates/scroll_top');
            //$this->load->view('templates/quick_nav');
            $this->load->view('templates/footer');
        }
    }
}