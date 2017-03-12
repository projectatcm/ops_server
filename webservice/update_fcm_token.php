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

$id = filter_input(INPUT_POST, 'id');
$fcm_id = filter_input(INPUT_POST, 'fcm_id');
$user->updateToken($id,$fcm_id);
$response['status'] = "success";
$response['message'] = "Token Updated";



echo json_encode($response);

?>
