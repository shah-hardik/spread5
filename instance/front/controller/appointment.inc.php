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
//$us = $_REQUEST['user'];

//$check = qs("select username from registration where username = '{$us}'");


//$d = qs("select user from user_checkin_detail where user = '{$us}'");




$jsInclude = "appointment.js.php";
?>