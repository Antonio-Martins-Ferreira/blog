<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"
>
</head>
<body>
    <main>
        <h1>Ajouter un article</h1>

        <form action="add_article.php" method="POST">
            <div>
                <label for="title">Titre de l'article</label>
                <input type="text" name="title" placeholder="Entrer votre texte ...">
            </div>
            <div>
                <label for="content">Texte de votre article</label>
                <textarea name="content" id="content" placeholder="Entrer votre texte ..."></textarea>
            </div>
            <div>
                <input type="submit" value="Ajouter">
            </div>

        </form>
    </main>
</body>
</html>