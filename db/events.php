<?php
defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname' => '\core\event\user_loggedin',
        'callback' => '\local_trigger_moodle\local\event_handler::handle_user_loggedin',
    ],
];
