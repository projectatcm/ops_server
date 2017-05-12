<?php 
require_once '../libs/Admin.php';
$admin = new Admin();
$response = array(
	"status" => "error",
	"message" => "",
	"data" => array()
);

$key = filter_input(INPUT_GET,'key');
$contacts = $admin->getContacts($key);

if(empty($contacts)){
	$response['message'] = "No news found";
}else{
	$response['status'] = "success";
	$response['message'] = "";
	$response['data'] = $contacts;
}


echo json_encode($response);

?>
