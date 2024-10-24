<?php
require_once('../controllers/etudiantControllers.php');
require_once('../models/etudiant.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $etudiantCtr = new etudiantControllers();
        $res = $etudiantCtr->getlogin($username, $password); 

        if ($res) {
            header('Location: courses.html');
            exit();
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
