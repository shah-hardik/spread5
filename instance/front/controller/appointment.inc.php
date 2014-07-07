<?php

$urlArgs = _cg("url_vars");

$date = date('Y-m-d H:i:s', strtotime($_REQUEST['date']));
$time = date('Y-m-d H:i:s', strtotime($_REQUEST['time']));


if (isset($_REQUEST['sbt_btn'])) {

    qi('appointment', array(
        'user' => _escape($_REQUEST['user']),
        'time' => _escape($time),
        'date' => _escape($date),
        'notes' => _escape($_REQUEST['notes']),
            ), 'REPLACE');
}



$jsInclude = "appointment.js.php";
?>