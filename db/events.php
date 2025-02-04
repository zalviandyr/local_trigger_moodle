<?php
defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname' => '\core\event\user_enrolment_created',
        'callback' => '\local_trigger_moodle\local\event_handler::user_enrolment_created',
    ],
];
