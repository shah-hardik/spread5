<?php
$urlArgs = _cg("url_vars");
 $profile_id = $urlArgs[0];
 
 $profiledetail = qs("select * from registration where id = '{$profile_id}'");
 
 
$jsInclude = "user.js.php";
_cg("page_title", "Profile");
?>