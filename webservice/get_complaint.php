<?php 
require_once '../libs/User.php';
$user = new User();
$response = array(
	"status" => "error",
	"message" => "",
	"data" => array()
	);

$user_id = filter_input(INPUT_GET,'id');
$complaint = $user->getComplaint($user_id);
if(empty($complaint)){
	$response['status'] = "empty";
	$response['message'] = "No Complaint Found";
}else{
	$response['status'] = "success";
	$response['message'] = "Complaint Submitted !";
	$response['data'] = $complaint;
}


echo json_encode($response);

?>
