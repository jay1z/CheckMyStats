<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    header("Content-Type: application/json");

    $user_id = $this->session->userdata('id');

    if (!$user_id) {
        redirect('login');
    } else {
        $query = $this->db->get_where('userXteam', array('user_id' => $user_id));
    }

    $result = '{
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": -1,
        "total": '. $query->num_rows() .',
        "sort": "asc",
        "field": "fullname"
    }, "data": [';

    if (isset($query)) {
        foreach ($query->result() as $row) {
            $result .='{"fullname": "'.$row->user_id.'","position": "Center Field","number": "24"},';
        }
    }

    $result .=']}';
    echo $result;