<?php

class etudiant {
    private $id;
private $identite,$username,$prenom,$numtel,$email,$class,$password;
function __construct($id="", $identite="",$username="",$prenom="",$numtel="",$email="",$class="",$password="") {
    $this->id = $id;
    $this->identite=$identite;
    $this->username=$username;
    $this->prenom=$prenom;
    $this->numtel=$numtel;
    $this->email=$email;
    $this->class=$class;
    $this->password=$password;
}
public function getid() {
    return $this->id;
}

public function getidentite(){
	return $this->identite;
}

public function getusername(){
	return $this->username;
}

public function getPrenom(){
	return $this->prenom;
}

public function getnumtel(){
	return $this->numtel;
}

public function getemail(){
	return $this->email;
}

public function getclass(){
	return $this->class;
}
public function getpassword(){
	return $this->password;
}
public function setid($id) {
    $this->id = $id;
}

public function setidentite($identite){
        $this->identite = $identite;
    }

public function setusername($username){
        $this->username = $username;
    }

public function setprenom($prenom){
        $this->prenom = $prenom;
    }

 public function setnumtel($numtel){
        $this->numtel = $numtel	;
    }

    public function setemail($email){
        $this->email = $email	;
    }

    public function setclass($class){
        $this->class = $class	;
    }
    public function setpassword($password){
        $this->password = $password	;
    }
	
}?>