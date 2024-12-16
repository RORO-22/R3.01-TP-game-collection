<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="/game-collection/views/style/common.css">
</head>
<body>
    <form action="/game-collection/register/submit" method="post">
        <h1>Inscription</h1>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname" required>
        
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirm-password">Confirmation du mot de passe :</label>
        <input type="password" id="confirm-password" name="confirm_password" required>
        
        <button type="submit">S'inscrire</button>
        <a href="/game-collection/views/login.php">Se connecter</a>
    </form>
    <footer>
        Game Collection - 2024 - Tous droits réservés
    </footer>
</body>
</html>
