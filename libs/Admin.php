<?php

require_once 'DbConnection.php';

class Admin extends Dbconnection {

    public function login($uname, $pass) {
        $query = "select * from admin where username ='$uname' AND password='$pass'";
        return $this->getData($query);
    }


}
