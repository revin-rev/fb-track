<?php 
$db = new Mysqli("localhost", "fbpowereditor", "india@123", "fbpowereditor");
if($db->connect_errno){
  die('Connect Error: ' . $db->connect_errno);
} 


if(isset($_REQUEST['reference'])) {
	
	$get = $db->query("SELECT id FROM fb_user_details WHERE user_id='".$_REQUEST['userid']."' ");
	if($get->num_rows > 0) {
		$db->query("UPDATE fb_user_details SET reference='".$_REQUEST['reference']."' WHERE user_id = '".$_REQUEST['userid']."' ");
	} else {
		$db->query("INSERT INTO fb_user_details(`user_id`,`reference`) VALUES('".$_REQUEST['userid']."','".$_REQUEST['reference']."')");
	}
	echo $db->affected_rows;
}

if(isset($_REQUEST['comment'])) {
	$get = $db->query("SELECT id FROM fb_user_details WHERE user_id='".$_REQUEST['userid']."' ");
	if($get->num_rows > 0) {
		$db->query("UPDATE fb_user_details SET comment='".$_REQUEST['comment']."' WHERE user_id = '".$_REQUEST['userid']."' ");
	} else {
		$db->query("INSERT INTO fb_user_details(`user_id`,`comment`) VALUES('".$_REQUEST['userid']."','".$_REQUEST['comment']."')");
	}
	echo $db->affected_rows;
}