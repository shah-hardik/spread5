<?php
$urlArgs = _cg("url_vars");
 $status_id = $urlArgs[0];
 
$receive_id = getSenderIdFromEmail($_SESSION['user']);
$getFriend = q("select * from friend_request where receiver_id = '{$receive_id['id']}' and status = '1'");


 if(isset($status_id) != ''){
 $update = qu('friend_request', array(
                    'status' => '1'
                        )," id = '{$status_id}'");
                       
                      
 }
$jsInclude = "user.js.php";
_cg("page_title", "My Friend");
?>
