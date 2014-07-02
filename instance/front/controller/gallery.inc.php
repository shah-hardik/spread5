<?php
$urlArgs = _cg("url_vars");
$user = getSenderIdFromEmail($_SESSION['user']);


# Handler for new Photo.
if (isset($_REQUEST['gallery_id'])) {
    $filename = $_FILES['image']['tmp_name'];

    if ($filename) {
	$db_filename = mt_rand(0, 999999) . $_FILES['image']['name'];
	$destination = _PATH . "instance/front/media/img/" . $db_filename;
	$image = move_uploaded_file($filename, $destination);
	$_REQUEST['image'] = $db_filename;
    } else {
	$_REQUEST['image'] = $_REQUEST['org_image'];
    }

   $inserted = qi('photo_gallery', array(
	'user_id' => _escape($user['id']),
	'photo' => _escape($_REQUEST['image'])
  ));

   if ($inserted > 0) {
        $greetings = "Photo Uploaded successfully";
        unset($_REQUEST['fields']);
    } else {
        $error = "Unable to Upload Photo";
    }
}
$images = q("select * from photo_gallery where user_id = '{$user['id']}'");


$jsInclude = "";
_cg("page_title", "Gallery");
?>
