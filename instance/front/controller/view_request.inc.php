<?php
$urlArgs = _cg("url_vars");
$declineId = $urlArgs[0];
if(isset($declineId) != '')
{
 
 $update = qu('friend_request', array(
                    'status' => 'Pending'
                        )," id = '{$declineId}'");
                       
      if(!empty($update)){
          $greetings = "Request Declined....";
      }                
  
}

$receive_id = getSenderIdFromEmail($_SESSION['user']);
$request = q("select * from friend_request where receiver_id = '{$receive_id['id']}' and status = '0'");
 
$jsInclude = "user.js.php";
_cg("page_title", "View Request");
?>
