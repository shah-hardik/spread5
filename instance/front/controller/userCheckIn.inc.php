<?php

$urlArgs = _cg("url_vars");

if ($_REQUEST['customFilter']) {
   
    $username = $_REQUEST['userName'];
    $userCond = $_REQUEST['userName'] != '' ? " AND user  LIKE '%{$username}%'" : '';
  
    $query = "SELECT * FROM `user_checkin_detail` WHERE 
            1=1  {$userCond} order by id DESC LIMIT 0,20  ";
    $user = q($query);

    include _PATH . "instance/front/tpl/userCheckIn_data.php";

  

    die;
}


$checkindate = date('Y-m-d H:i:s', strtotime($_REQUEST['checkindate']));
$checkintime = date('Y-m-d H:i:s', strtotime($_REQUEST['checkintime']));

$checkoutdate = date('Y-m-d H:i:s', strtotime($_REQUEST['checkoutdate']));
$checkouttime = date('Y-m-d H:i:s', strtotime($_REQUEST['checkouttime']));


if (isset($_REQUEST['sbt_btn'])) {

    qi('user_checkin_detail', array(
        'user' => _escape($_REQUEST['user']),
        'check_in_time' => _escape($checkintime),
        'check_in_date' => _escape($checkindate),
        'check_out_time' => _escape($checkouttime),
        'check_out_date' => _escape($checkoutdate),
        'notes' => _escape($_REQUEST['notes']),
            ), 'REPLACE');

    //  _R(lr('login'));
}
//$user = q("select * from user_checkin_detail ");

$us = $_REQUEST['user'];
//d($us);
$check = qs("select username from registration where username = '{$us}'");
//d($check);

$d = qs("select user from user_checkin_detail where user = '{$us}'");

$user = q("select * from user_checkin_detail");



$jsInclude = "userCheckIn.js.php";

?>