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



if (isset($_REQUEST['sbt_btn'])) {


    
    
    
    $email = _escape($_REQUEST['email']);
    $password = _escape($_REQUEST['password']);

    $data = q("select email ,password from registration where email = '$email'  AND password = '$password' ");
    $id1= qs("select username from registration where email = '$email' ");
   // d($data); 
    //d($id1);
    
 $_SESSION['user'] =$id1;
       // d($_SESSION['user']);

    if ($data != null) {
       
       _R('view_request');
    } else {

        $error = "Username Or Password is Wrong!!!";
    }
}



?>