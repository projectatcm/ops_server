<?php 
@session_start();
require_once '../libs/Admin.php';
$admin = new Admin();

if(empty($_POST)){
	// if post data is not available redirects
	// to the home 
	header('Location:../');
}

$chapter = filter_input(INPUT_POST, "chapter");
$title = filter_input(INPUT_POST, "title");	
$content = filter_input(INPUT_POST, "content");	
	

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
