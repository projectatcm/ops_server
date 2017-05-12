<?php 
require_once '../libs/User.php';
$user = new User();
$response = array(
	"status" => "error",
	"message" => "",
	"data" => array()
);

if(empty($_POST)){
	// if post data is not available redirects
	// to the home 
$response['message'] = "form data missing";
}

$user_id = filter_input(INPUT_POST, 'user_id');
$title = filter_input(INPUT_POST, 'title');
$message = filter_input(INPUT_POST, 'message');
$date = date('Y-m-d');
$comp_id = $user->addRequest($user_id,$title,$message,$date);
if($comp_id){
	$response['status'] = "success";
	$response['message'] = "Complaint Added";
	$response['data'] = array(
		"id" => $comp_id,
		);
}



echo json_encode($response);

?>
