<?php
$urlArgs = _cg("url_vars");
$urlArgs[0];
$user = q("select * from registration");

 $delet =qs("delete  from registration where id = '{$urlArgs[0]}' ");

if (isset($_REQUEST['logout'])) {

    User::killSession();
    _R('login');
}

$jsInclude = "login.js.php";
_cg("page_title", "Admin");
?>