<?php
$urlArgs = _cg("url_vars");
 
$receive_id = getSenderIdFromEmail($_SESSION['user']);
$request = q("select * from friend_request where receiver_id = '{$receive_id['id']}'");
 
$jsInclude = "user.js.php";
_cg("page_title", "View Request");
?>
