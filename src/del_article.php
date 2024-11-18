<?php
try {
    $id = $_GET['id'];

    $connexion = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $connexion->prepare('DELETE FROM article WHERE id = :id');
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    header("HX-Refresh: true");

} catch (PDOException $error) {
    echo "Erreur de connexion à la base de donnée : " . $error->getMessage();
}

$connexion = null;