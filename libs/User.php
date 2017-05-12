<?php 

require_once 'DbConnection.php';

class User extends DbConnection{

	public function checkLogin($device_id, $password) {
        $query = "select * from users where device_id ='$device_id' AND password='$password'";
        return $this->getData($query);
    }

    public function addUser($name,$email,$mobile,$password,$aadhar,$device_id,$fcm_id){
        $query = "INSERT INTO users set name = '$name',
                                        email = '$email',
                                        mobile = '$mobile',
                                        password = '$password',
                                        aadhar = '$aadhar',
                                        device_id = '$device_id',
                                        fcm_id = '$fcm_id'";

        return $this->setData($query);
    }

public function getUser($user_id = ""){
    if($user_id != ""){
        $query = "SELECT * FROM users where id = '$user_id'";
    }
    $query = "SELECT * FROM users";
    return $this->getData($query);
}

    public function updateToken($id,$fcm_id){
    	$query = "UPDATE users set fcm_id = '$fcm_id' where id = '$id'";
    	return $this->setData($query);
    }


    public function addComplaint($user_id,$title,$content,$location,$date){
         $query = "INSERT INTO complaint set user_id = '$user_id',
                                        title = '$title',
                                        content = '$content',
                                        location = '$location',
                                        `date`= '$date',
                                        status = '0'";
         return $this->setData($query);                                
    }
    public function addRequest($user_id,$title,$message,$date){
         $query = "INSERT INTO request set user_id = '$user_id',
                                        title = '$title',
                                        message = '$message',
                                        `date` = '$date'";
         return $this->setData($query);                                
    }

    public function getComplaint($user_id,$status = ""){
        if($status != ""){
               $query = "select * from  complaint where user_id = '$user_id' and status = '$status'";
           }else{
               $query = "select * from  complaint where user_id = '$user_id'";
           }
        return $this->getData($query);
    }


}

 ?>