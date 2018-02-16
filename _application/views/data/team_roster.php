<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    header("Content-Type: application/json");

    $user_id = $this->session->userdata('id');

    if (!$user_id) {
        redirect('login');
    } else {
        $query = $this->db->get_where('userXteam', array('team_id' => 1));
    }

    if (isset($query)) {
        $count = $query->num_rows();
        $result = '{
        "meta": {
            "page": 1,
            "pages": 1,
            "perpage": -1,
            "total": '.$count.',
            "sort": "asc",
            "field": "fullname"
        }, "data": [';

        $counter = 0;
        foreach ($query->result() as $row){
            if (++$counter == $count) {
                $result .= '{"fullname": "' . $row->user_id . '","position": "Center Field","number": "24"}';
            }else{
                $result .= '{"fullname": "' . $row->user_id . '","position": "Center Field","number": "24"},';
            }
        }
    }

    $result .=']}';

    echo $result;