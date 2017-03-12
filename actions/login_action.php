<?php 
@session_start();
require_once '../libs/Admin.php';
$admin = new Admin();

if(empty($_POST)){
	// if post data is not available redirects
	// to the home 
	header('Location:../');
}

$username = filter_input(INPUT_POST, "username");
$password = filter_input(INPUT_POST, "password");

$loginData = $admin->login($username,$password);
if(!empty($loginData)){
	echo "Welcome Admin";
	$_SESSION['ops_admin'] = "true";
	header('location:../home.php');
}else{
	echo "Username or Password Error !";
	header('Location:../');
}


?>
