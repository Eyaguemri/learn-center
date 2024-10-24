<?php
include_once('../models/etudiant.php') ;
include_once('../database/connexion.php');
class etudiantControllers extends connexion{
function __construct() {
parent::__construct();
}

function insert(etudiant $c){

$query="insert into inscription(identite,username,prenom,numtel,email,class,password)values(?, ?, ?, ?, ?, ?,?)";
$res=$this->pdo->prepare($query);

$aryy =array($c->getidentite(),$c->getusername(),$c->getPrenom(),$c->getnumtel(),$c->getemail(),$c->getclass(),$c->getpassword()) ;
//var_dump($aryy);
return $res->execute($aryy);

}


public function getlogin($username, $password) {
    try {
        $query = "SELECT username, password FROM inscription WHERE username = ? AND password = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$username, $password]);
        $etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
        return $etudiant;
    } catch (PDOException $e) {
        // Gérer les erreurs de requête
        echo "Erreur : " . $e->getMessage();
        return false;
    }
}





function getetudiant($id){
    $query="SELECT * FROM inscription WHERE id = ? ";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    $array= $res->fetch();
    return $array;
}
function delete($idetudiant) {
    $query = "DELETE FROM inscription WHERE id = ?";
    $res = $this->pdo->prepare($query);
    return $res->execute(array($idetudiant));
}
function liste(){
$query = "select * from inscription";
$res=$this->pdo->prepare($query);
$res->execute();
return $res;
}
function modifier_user(etudiant $c) {
    $sql = "UPDATE inscription SET identite = ?, username = ?, prenom = ?, numtel = ?, email = ?, class = ? WHERE id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute(array($c->getidentite(), $c->getusername(), $c->getPrenom(), $c->getnumtel(), $c->getemail(), $c->getclass(), $c->getid()));
}




}

?>


	