<?php
require_once('../controllers/contactControllers.php');
require_once('../models/contact.php');
$id=$_POST['id'];
$objet=$_POST['objet'];
$text=$_POST['text'];

$contact=new contact($id,$objet,$text);
$contactCtr=new contactControllers();


$res=$contactCtr->insert($contact);


if($res==true){
	echo "enregistrer";
	//header('Location:contact.html');
}


?>