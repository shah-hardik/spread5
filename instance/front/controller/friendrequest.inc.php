<?php
$urlArgs = _cg("url_vars");
 $receiver_id = $urlArgs[0];
$sender_id = $_SESSION['user']['id'];
d($_SESSION);die;
 if(isset($sender_id) != ''){
 qi('friend_request', array(
                    'sender_id' => _escape($sender_id),
                    'receiver_id' => _escape($receiver_id)
                        ), 'REPLACE');
 }
$jsInclude = "user.js.php";
_cg("page_title", "Send Request");
?>
