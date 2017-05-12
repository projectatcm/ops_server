<?php 
@session_start();
require_once '../libs/Admin.php';
$admin = new Admin();

if(empty($_GET)){
	// if post data is not available redirects
	// to the home 
	header('Location:../');
}

$image_upload_path  = "images/news/";

$id = filter_input(INPUT_GET, "id");
$user_data = $admin->getNews($id);
$user_image = $user_data[0]['image'];
if($user_image != ""){
	unlink("../".$user_image);
}
$admin->deleteNews($id);
header('location:../news.php');


?>
