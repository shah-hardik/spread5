<?php

/**
 * Admin side Login file
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package BePure
 * 
 */
$urlArgs = _cg("url_vars");
session_start();

 $_SESSION['user'] = $_REQUEST['email'];
 
 
if (isset($_REQUEST['sbt_btn'])) {

    
        $email = _escape($_REQUEST['email']);
        $password = _escape($_REQUEST['password']);

        $data = q("select email,password from registration where email = '$email'  AND password = '$password' ");

        if ($data != null) {
            
            _R('view_request');
            
        } else {

            $error = "Username Or Password is Wrong!!!";
        }
   
}


?>