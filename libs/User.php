<?php 

require_once 'DbConnection.php';

class User extends DbConnection{

	public function checkLogin($uname, $pass) {
        $query = "select * from users where email ='$uname' AND password='$pass'";
        return $this->getData($query);
    }

    public function addUser($name,$email,$phone,$password,$aadhar,$mac){
    	$query = "INSERT INTO users set name = '$name',
    									email = '$email',
    									phone = '$phone',
    									password = '$password',
    									aadhar = '$aadhar',
    									mac = '$mac'";
    	return $this->setData($query);
    }


}

 ?>