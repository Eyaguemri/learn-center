<?php
require_once('../controllers/etudiantControllers.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $etudiantCtr = new etudiantControllers();
    $etudiantCtr->delete($id);
    echo "etudiant supprimer avec succee";
    // Redirigez vers la page d'index ou une autre page après la suppression
    // header('Location: index.php');
} else {
    echo "Erreur : ID non défini.";
}
?>
