<?php
$title = htmlspecialchars($_POST['title'],ENT_QUOTES, 'UTF-8');
$content = htmlspecialchars($_POST['content'],ENT_QUOTES, 'UTF-8');

try {
    $connexion = new PDO("mysql:host=localhost;dbname=blog_db", 'root', '');
} catch (PDOException $error)
{
    echo "Erreur de connexion à la base de données: " .
    $error->getMessage();
}

$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $connexion->prepare("INSERT INTO article (title, content) VALUES (:title, :content)");

$stmt->bindParam(':title', $title);
$stmt->bindParam(':content', $content);

if ($stmt->execute()):
    header("Location: index.php");
else:
    echo "Erreur lors de l'ajout d'un article !";
endif;

$connexion = null;

?>