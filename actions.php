<?php 
require_once 'libs/Admin.php';
$admin = new Admin();
if(!empty($_POST)){
	$action = $_POST['action'];

	switch ($action) {
		case 'login':
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($admin->login($username,$password)){
				echo "welcome";
			}else{
				echo "Login faliled, plase try again";
			}
			break;
		
		default:
			# code...	
			break;
	}
}

