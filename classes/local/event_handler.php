<?php
namespace local_trigger_moodle\local;

use core\event\user_loggedin;
use core\notification;

class event_handler {
    public static function handle_user_loggedin(user_loggedin $event): void {
        $userid = $event->relateduserid;
        notification::add("Selamat datang kembali, pengguna dengan ID {$userid}!");
    }
}
