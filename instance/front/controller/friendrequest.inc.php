<?php
$urlArgs = _cg("url_vars");
 $receiver_id = $urlArgs[0];
$sender_id = getSenderIdFromEmail($_SESSION['user']);

 if(isset($sender_id) != ''){
 qi('friend_request', array(
                    'sender_id' => _escape($sender_id['id']),
                    'receiver_id' => _escape($receiver_id)
                        ), 'REPLACE');
 }
$jsInclude = "user.js.php";
_cg("page_title", "Send Request");
?>
