<?php
require_once('../controllers/adminControllers.php');
require_once('../models/admin.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $adminCtr = new adminControllers();
        $admin = $adminCtr->getadmin($username, $password);
        if ($admin) {
            header('Location:dashbord.html');
            exit();
        } else {
            header('Location:loginadmin.html');
            exit();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
