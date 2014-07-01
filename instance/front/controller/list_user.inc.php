<?php
$urlArgs = _cg("url_vars");
$sender_id = getSenderIdFromEmail($_SESSION['user']);
if ($_REQUEST['customFilter']) {
   
    $username = $_REQUEST['userName'];
    $userCond = $_REQUEST['userName'] != '' ? " AND username  LIKE '%{$username}%'" : '';
  
    $query = "SELECT * FROM `registration` WHERE 
            1=1  {$userCond} order by id DESC LIMIT 0,10  ";
    $user = q($query);

    include _PATH . "instance/front/tpl/user_list_data.php";

  

    die;
}


$user = q("select * from registration");

 $delet = qs("delete  from registration where id = '{$urlArgs[0]}' ");


$jsInclude = "user.js.php";
_cg("page_title", "User");
?>