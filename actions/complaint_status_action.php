<?php 
@session_start();
require_once '../libs/Admin.php';
require_once '../libs/User.php';
$admin = new Admin();
$user = new User();
if(empty($_POST)){
	// if post data is not available redirects
	// to the home 
	header('Location:../');
}

$comp_id = filter_input(INPUT_POST, "id");
$user_id = filter_input(INPUT_POST, "user_id");
$status = filter_input(INPUT_POST, "status");
$date = filter_input(INPUT_POST, "date");
$user_data = $user->getUser($user_id);
$user_name = $user_data[0]['name'];
$user_fcm_token = $user_data[0]['fcm_id'];
$pushMessage = array(
	'message' 	=> 'Complaint Status Update',
	'title'		=> 'Your Complaint is Accepted',
	'subtitle'	=> 'Congrats your complaint is accepted !',
	'vibrate'	=> 1,
	'sound'		=> 1,
	'largeIcon'	=> 'large_icon',
	'smallIcon'	=> 'small_icon'
	);
switch ($status) {
	case '1':
		$pushMessage['title'] = 'Your Complaint is Accepted';
		break;
	case '2':
		$pushMessage['title']= 'Your Complaint is Pushed for Sitting';
		$pushMessage['subtitle']= 'You are requested to report in your nearest police station soon !';
		break;
	case '3':
		$pushMessage['title']= 'Your Complaint is Rejected';
		$pushMessage['subtitle']= 'You complaint is rejected. Please try again or contact nearest police station to know';
		break;
	default:
		# code...
	break;
}
$admin->updateStatus($comp_id,$status);

// including push messageing function
include '../libs/push.php';
sendPushMessage(array($user_fcm_token),$pushMessage);
header('location:../complaint.php');
?>
