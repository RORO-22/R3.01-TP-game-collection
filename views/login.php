<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="/game-collection/views/style/common.css">
</head>
<body>
    <form action="/game-collection/login/submit" method="post">
        <h1>Se connecter à Game Collection</h1>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Se connecter</button>
        <a href="/game-collection/views/register.php">S'inscrire</a>
    </form>
    <footer>
        Game Collection - 2024 - Tous droits réservés
    </footer>
</body>
</html>