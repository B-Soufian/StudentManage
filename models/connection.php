<?php
    try {
        $conn = new PDO("mysql:host=localhost;dbname=gestionscolarite", "root", "");
    }catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }
?>
