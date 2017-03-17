<?php 
@session_start();
require_once '../libs/Admin.php';
$admin = new Admin();

if(empty($_POST)){
	// if post data is not available redirects
	// to the home 
	header('Location:../');
}

$image_upload_path  = "images/news/";

$title = filter_input(INPUT_POST, "title");
$news = filter_input(INPUT_POST, "news");
$image_save_path = "";
// uploding image
if(!empty($_FILES['image'])){
	$image = $_FILES['image'];
	$image_name = $image['name'];
	$image_path = $image['tmp_name'];
	$image_extn = explode('.', $image_name);
	$image_new_name = time().uniqid().".".$image_extn[1];
	if(move_uploaded_file($image_path, "../".$image_upload_path.$image_new_name)){
		$image_save_path = $image_upload_path.$image_new_name;
	}
}
$news_id = $admin->addNews($title,$news,$image_save_path);
header('location:../news.php');


?>
