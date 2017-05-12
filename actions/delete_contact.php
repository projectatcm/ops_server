<?php 
require_once '../libs/Admin.php';
$admin = new Admin();
if(empty($_GET)){
	// if post data is not available redirects
	// to the home 
	header('Location:../');
}

$id = $_GET['id'];

 $admin->deleteContact($id);
header('location:../contacts.php');
 ?>