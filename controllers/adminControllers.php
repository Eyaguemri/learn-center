<?php
include_once('../models/admin.php');
include_once('../database/connexion.php');

class adminControllers extends Connexion {
    public function __construct() {
        parent::__construct();
    }

    public function getadmin($username, $password) {
        try {
            $query = "SELECT * FROM admin WHERE username = ? AND password = ?";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute([$username, $password]);
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);
            return $admin;
        } catch (PDOException $e) {
            // Gérer les erreurs de requête
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
}
?>
