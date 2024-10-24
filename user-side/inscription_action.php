<?php
require_once('../controllers/etudiantControllers.php');
require_once('../models/etudiant.php');
$identite=$_POST['identite'];
$username=$_POST['username'];
$prenom=$_POST['prenom'];
$numtel=$_POST['numtel'];
$email=$_POST['email'];
$class=$_POST['class'];
$password=$_POST['password'];
$etudiant=new etudiant($identite,$username,$prenom,$numtel,$email,$class,$password);
$etudiantCtr=new etudiantControllers();


$res=$etudiantCtr->insert($etudiant);


if($res==true){
	header('Location:Login.html');
}


?>