<?php
date_default_timezone_set("Etc/GMT-4");
$db = new mysqli("localhost", "root", "", "project");
if ($db->connect_error) {
    trigger_error('Database connection failed:' . $db->connect_error, E_USER_ERROR);
}
$db->set_charset("utf8mb4");
