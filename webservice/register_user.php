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

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$mobile = filter_input(INPUT_POST, 'mobile');
$password = filter_input(INPUT_POST, 'password');
$aadhar = filter_input(INPUT_POST, 'aadhar');
$device_id= filter_input(INPUT_POST, 'device_id');
$fcm_id= filter_input(INPUT_POST, 'fcm_id');
$user_id = $user->addUser($name,$email,$mobile,$password,$aadhar,$device_id,$fcm_id);
if($user_id){
	$response['status'] = "success";
	$response['message'] = "Regitration Successfull";
	$response['data'] = array(
		"id" => $user_id,
		"name" => $name,
		"email" => $email
		);

}



echo json_encode($response);

?>
