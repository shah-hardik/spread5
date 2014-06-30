<?php
$urlArgs = _cg("url_vars");


$checkinndate = date('Y-m-d', strtotime($_REQUEST['checkindate']));
$checkintime = time('hh-mm-ss',strtotime($_REQUEST['checkintime'])); 
$jsInclude = "task.js.php";
?>

