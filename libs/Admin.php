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
     public function addContact($name,$phone){
        $query = "INSERT INTO contacts set name = '$name', phone = '$phone'";
        return  $this->setData($query);
    }

    public function getNews($id = ""){
    	if(empty($id)){
    		$query = "SELECT * FROM news";
    	}else{
    		$query = "SELECT * FROM news where id = '$id'";
    	}
    	        return $this->getData($query);
    }
    public function getContacts($key = ""){
        if(empty($id)){
            $query = "SELECT * FROM contacts";
        }else{
            $query = "SELECT * FROM contacts where name like  '%$id%'";
        }
                return $this->getData($query);
    }
   public function deleteContact($id){
        $query = "DELETE FROM contacts WHERE id = '$id'";
        return  $this->setData($query);
    }
    public function deleteNews($id){
    	$date = date('Y-m-d');
    	$query = "DELETE FROM news WHERE id = '$id'";
		return 	$this->setData($query);
    }

    public function getComplaint($comp_id = ""){
        if($comp_id != ""){
               $query = "select * from  complaint where id = '$comp_id'";
           }else{
               $query = "select * from  complaint where status = '0' ORDER BY date DESC";
           }
        return $this->getData($query);
    }
     public function getRequest($id = ""){
        if($id != ""){
               $query = "select * from  request where id = '$id'";
           }else{
               $query = "select * from  request where status = '0' ORDER BY date DESC";
           }
        return $this->getData($query);
    }




    public function updateStatus($id,$status){
        $query = "UPDATE complaint set status = '$status' where id = '$id'";
        return $this->setData($query);
    }



}
