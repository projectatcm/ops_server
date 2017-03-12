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
    public function updateToken($id,$fcm_id){
    	$query = "UPDATE users set fcm_id = '$fcm_id' where id = '$id'";
    	return $this->setData($query);
    }


}

 ?>