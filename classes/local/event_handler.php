<?php
namespace local_trigger_moodle\local;

use core\event\user_enrolment_created;
use core\notification;
use curl;

class event_handler {
    public static function user_enrolment_created(user_enrolment_created $event): void {

        $data = $event->get_data();
        $userid = $data['userid'];
        $relateduserid = $data['relateduserid'];
        $courseid = $data['courseid'];

        $api = get_config('local_trigger_moodle', 'api');

        $curl = new curl();
        $options = [
            'CURLOPT_RETURNTRANSFER' => true,
            'CURLOPT_HTTPHEADER' => [
                'Content-Type: application/json',
            ]
        ];
        $curl->post($api, json_encode([
            'user_id' => $userid,
            'course_id' => $courseid,
        ]), $options);

        notification::add("Enroll Trigger, userid: $userid, relateduserid: $relateduserid , courseid: $courseid");
        notification::add("Hit API: $api");
    }
}
