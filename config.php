<?php
$config = array();
$config['name'] = "Backers List";
$config['author'] = "Microweber";
$config['ui'] = true; //module will be visible in the live edit
$config['ui_admin'] = true; //module will be visible in the admin
$config['categories'] = "other";
$config['position'] = 99;
$config['version'] = 0.1;

$config['tables'] = array(
    "backers_list" => array(
        'id' => "integer",
        'backer_name' => "text",
        'backer_email' => "text",
        'backer_amount' => "integer",
        'created_at' => "dateTime"
    )
);