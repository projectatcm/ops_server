<?php 
@session_start();
require_once '../libs/Admin.php';
$admin = new Admin();

if(empty($_POST)){
	// if post data is not available redirects
	// to the home 
	header('Location:../');
}


$name = filter_input(INPUT_POST, "name");
$phone = filter_input(INPUT_POST, "phone");
// uploding image

$contact_id = $admin->addContact($name,$phone);
header('location:../contacts.php');


?>
