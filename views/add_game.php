<?php 
require_once __DIR__ . '/header.php';
require_once __DIR__ . '/../controllers/GameController.php';

$controller = new GameController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->addGame();
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un jeu</title>
    <link rel="stylesheet" href="style/add_game.css">
</head>
<body>
    <form action="add_game.php" method="POST">
        <h2>Ajouter un jeu à sa bibliothèque</h2>
        <p>Le jeu que vous souhaitez ajouter n'existe pas ! Vous pouvez le créer, celui-ci sera automatiquement ajouté à votre bibliothèque !</p>

        <label for="nom">Nom du jeu</label>
        <input type="text" id="nom" name="nom" required>

        <label for="editeur">Éditeur du jeu</label>
        <input type="text" id="editeur" name="editeur">

        <label for="sortie">Date de sortie</label>
        <input type="date" id="sortie" name="sortie">

        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>

        <label for="url_jeu">URL de la cover</label>
        <input type="url" id="url_jeu" name="url_jeu">

        <label for="url_site">URL du site officiel</label>
        <input type="url" id="url_site" name="url_site">

        <label>Plateformes</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="plateformes[]" value="PC"> PC</label>
            <label><input type="checkbox" name="plateformes[]" value="PlayStation"> PlayStation</label>
            <label><input type="checkbox" name="plateformes[]" value="Xbox"> Xbox</label>
            <label><input type="checkbox" name="plateformes[]" value="Nintendo Switch"> Nintendo Switch</label>
            <label><input type="checkbox" name="plateformes[]" value="Mobile"> Mobile</label>
        </div>

        <button type="submit">Ajouter le jeu</button>
    </form>

</body>
</html>
