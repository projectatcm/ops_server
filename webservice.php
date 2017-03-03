<?php 
require_once 'libs/Admin.php';
require_once 'libs/User.php';
$admin = new Admin();
$user = new User();

$response = array(
	"status" => "error",
	"message" => "empty request"
);
if(!empty($_POST) && !empty($_POST['action'])){
	$action = $_POST['action'];

	switch ($action) {
		case 'login':{
			$username = filter_input(INPUT_POST, 'email');
			$password = filter_input(INPUT_POST, 'password');
			$user_data = $user->checkLogin();
			print_r($user_data);
			break;	
		}
		case 'register':{
			$name = filter_input(INPUT_POST, 'name');
			$email = filter_input(INPUT_POST, 'email');
			$phone = filter_input(INPUT_POST, 'phone');
			$password = filter_input(INPUT_POST, 'password');
			$aadhar = filter_input(INPUT_POST, 'aadhar');
			$mac= filter_input(INPUT_POST, 'mac');
			$user_id = $user->addUser($name,$email,$phone,$password,$aadhar,$mac);
			if($user_id){
				$response['status'] = "success";
				$response['message'] = "Regitration Successfull";
				$response['data'] = array(
					"id" => $user_id,
					"name" => $name,
					"email" => $email
				);

			}
			break;		
		}
			
			
		case '':{

		}
		
		default:
			# code...	
			break;
	}



}


if(!empty($_GET)){

}



echo json_encode($response);


