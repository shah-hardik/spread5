<?php

$urlArgs = _cg("url_vars");
// Add new User

if (isset($_REQUEST['sbt_btn'])) {
    
    if ($_REQUEST['password'] != $_REQUEST['confirmpassword'])
        $msg = "Password And Confirm Password not match";

   {
            qi('registration', array(
                'username' => _escape($_REQUEST['username']),
                'password' => _escape($_REQUEST['password']),
                'conform_password' => _escape($_REQUEST['conform_password']),
                'fname' => _escape($_REQUEST['fname']),
                'lname' => _escape($_REQUEST['lname']),
                'address' => _escape($_REQUEST['address']),
                'city' => _escape($_REQUEST['city']),
                'phone' => _escape($_REQUEST['phone']),
                'email' => _escape($_REQUEST['email']),
                    ), 'REPLACE');

            _R(lr('login'));

     
    }

}
_cg("page_title", "Registration");
?> 