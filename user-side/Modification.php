<?php
require_once('../controllers/etudiantControllers.php');
require_once('../models/etudiant.php');

$etudiantCtr = new etudiantControllers();
$etudiant = new etudiant();

$etudiant->setid($_POST['id']); 
$etudiant->setidentite($_POST['identite']);
$etudiant->setusername($_POST['username']);
$etudiant->setprenom($_POST['prenom']);
$etudiant->setnumtel($_POST['numtel']);
$etudiant->setemail($_POST['email']);
$etudiant->setclass($_POST['class']);

$etudiantCtr->modifier_user($etudiant);
echo "modification reussite";

exit();
?>
