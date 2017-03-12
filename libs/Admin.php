<?php

require_once 'DbConnection.php';

class Admin extends Dbconnection {

    public function login($uname, $pass) {
        $query = "select * from admin where username ='$uname' AND password='$pass'";
        return $this->getData($query);
    }

    public function addNews($title,$news,$image){
    	$date = date('Y-m-d');
    	$query = "INSERT INTO news set title = '$title', news = '$news', image = '$image', date = '$date'";
		return 	$this->setData($query);
    }

    public function getNews($id = ""){
    	if(empty($id)){
    		$query = "SELECT * FROM news";
    	}else{
    		$query = "SELECT * FROM news where id = '$id'";
    	}
    	        return $this->getData($query);
    }
}
