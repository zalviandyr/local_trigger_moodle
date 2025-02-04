<?php

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {  // Hanya tampilkan jika user memiliki akses konfigurasi situs.
    $settings = new admin_settingpage('local_trigger_moodle', get_string('pluginname', 'local_trigger_moodle'));

    $settings->add(new admin_setting_configtext(
        'local_trigger_moodle/api',
        get_string('inputtext', 'local_trigger_moodle'),
        get_string('inputtext_desc', 'local_trigger_moodle'),
        ''
    ));

    // Menambahkan halaman pengaturan ke menu admin.
    $ADMIN->add('localplugins', $settings);
}