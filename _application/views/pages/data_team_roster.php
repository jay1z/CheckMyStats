<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    header("Content-Type: text/plain");

    $user_id = $this->session->userdata('id');

    echo '{
    "meta": {
        "page": 1,
        "pages": 1,
        "perpage": -1,
        "total": 7,
        "sort": "asc",
        "field": "fullname"
    },
    "data": [
        {
            "fullname": "Jason Zurowski",
            "url" : "'.urlencode('Jason Zurowski').'",
            "position": "Center Field",
            "number": "24" 
        },
        {
            "fullname": "Jason Zurowski",
            "url" : "'.urlencode('Jason Zurowski').'",
            "position": "Center Field",
            "number": "24" 
        },
        {
            "fullname": "Jason Zurowski",
            "url" : "'.urlencode('Jason Zurowski').'",
            "position": "Center Field",
            "number": "24" 
        },
        {
            "fullname": "Jason Zurowski",
            "url" : "'.urlencode('Jason Zurowski').'",
            "position": "Center Field",
            "number": "24" 
        },
        {
            "fullname": "Jason Zurowski",
            "url" : "'.urlencode('Jason Zurowski').'",
            "position": "Center Field",
            "number": "24" 
        },
        {
            "fullname": "Jason Zurowski",
            "url" : "'.urlencode('Jason Zurowski').'",
            "position": "Center Field",
            "number": "24" 
        },
        {
            "fullname": "Jason Zurowski",
            "url" : "'.urlencode('Jason Zurowski').'",
            "position": "Center Field",
            "number": "24" 
        }
    ]
}';