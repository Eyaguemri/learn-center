<?php
include_once('../models/contact.php') ;
include_once('../database/connexion.php');
class contactControllers extends connexion{
function __construct() {
parent::__construct();
}

function insert(contact $c){

$query="insert into message(id,objet,text)values(?, ?, ?)";
$res=$this->pdo->prepare($query);

$aryy =array($c->getid(),$c->getobjet(),$c->gettext()) ;
//var_dump($aryy);
//return $res->execute($aryy);
}


function getcontact($id,$obje,$text){
    $query="SELECT * FROM message  WHERE id = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($contact) {
    $query = "DELETE FROM message WHERE id = ?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($contact));
}
function liste(){
$query = "select * from message";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user(contact $c) {
    $sql = "UPDATE message SET id = ?, objet= ?, text = ? WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array($c->getid(), $c->getobjet(), $c->gettext()));
}




}

?>


	