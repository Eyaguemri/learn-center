<?php

class admin {
private $username,$password;
function __construct($username="",$password="") {
	
    $this->username=$username;
    $this->password=$password;
   
}

public function getusername(){
	return $this->username;
}

public function getpassword(){
	return $this->password;
}


public function setusername($username){
        $this->username = $username;
    }

public function setpassword($password){
        $this->password= $password;
    }


}?>