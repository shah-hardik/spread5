<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$urlArgs = _cg("url_vars");

$reg_id = $urlArgs[0];
$each_data = qs("select * from registration where id = '{$urlArgs[0]}'");


if (isset($_REQUEST['sbt_btn'])) {

    qu('registration', array(
        'username' => _escape($_REQUEST['username']),
        'password' => _escape($_REQUEST['password']),
        'conform_password' => _escape($_REQUEST['conform_password']),
        'fname' => _escape($_REQUEST['fname']),
        'lname' => _escape($_REQUEST['lname']),
        'address' => _escape($_REQUEST['address']),
        'city' => _escape($_REQUEST['city']),
        'phone' => _escape($_REQUEST['phone']),
        'email' => _escape($_REQUEST['email']),
            ), " id = '{$each_data['id']}'");
    _R(lr('list_user'));
}
?>
