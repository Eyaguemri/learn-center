<?php
require_once('../controllers/etudiantControllers.php');
require_once('../models/etudiant.php');


$etudiant = new etudiant();

$etudiant->setIdentite($_POST['identite']);
$etudiant->setUsername($_POST['username']);
$etudiant->setPrenom($_POST['prenom']);
$etudiant->setNumtel($_POST['numtel']);
$etudiant->setEmail($_POST['email']);
$etudiant->setClass($_POST['class']);
$etudiant->setPassword($_POST['password']);
$etudiantCtr = new etudiantControllers();

$res = $etudiantCtr->insert($etudiant);

if ($res == false) {
    echo "Problème d'insertion <br/>";
} else {
    echo "Insertion effectuée avec succès <br/>";
}
?>
