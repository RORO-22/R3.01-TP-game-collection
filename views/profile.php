<?php require_once __DIR__ . '/header.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon profil</title>
    <link rel="stylesheet" href="/game-collection/views/style/common.css">
</head>
<body>
    <main>
        <form action="/game-collection/profile/update" method="post">
            <h1>Mon profil</h1>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname" placeholder="MARCEL" required>

            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" placeholder="Guillaume" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="gmarcel@tech.fr" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" placeholder="********" required>

            <label for="confirm-password">Confirmation du mot de passe :</label>
            <input type="password" id="confirm-password" name="confirm_password" placeholder="********" required>

            <button type="submit">Modifier</button>
            <button type="button" onclick="confirmDelete()">Supprimer mon compte</button>
            <a href="/game-collection/logout.php" class="logout-button">Se déconnecter</a>
        </form>
    </main>
    <footer>
        Game Collection - 2024 - Tous droits réservés
    </footer>
</body>
</html>