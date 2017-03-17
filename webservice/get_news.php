<?php 
require_once '../libs/Admin.php';
$admin = new Admin();
$response = array(
	"status" => "error",
	"message" => "",
	"data" => array()
);

$id = filter_input(INPUT_GET,'id');
$news = $admin->getNews($id);

if(empty($news)){
	$response['message'] = "No news found";
}else{
	foreach ($news as $key => $item) {
		$image = $item['image'];
		if($image != ""){
			/* if image not equals empty
			 * converting image to base64 string
			 * and replacing image path with base64 string 
			*/
			$image_file_content = file_get_contents("../".$image);
			$image_base_64 = base64_encode($image_file_content);
			// replacing image field with base 64 string
			$news[$key]['image'] =  $image_base_64;
		}
	}

	$response['status'] = "success";
	$response['message'] = "";
	$response['data'] = $news;
}


echo json_encode($response);

?>
