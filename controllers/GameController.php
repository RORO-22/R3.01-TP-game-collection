<?php
class GameController {

    public function index() {
        require_once __DIR__ . '/../views/games.php';
    }

    public function showGame() {
        require_once __DIR__ . '/../views/game.php';
    }

    public function showAddGameForm() {
        require_once __DIR__ . '/../views/add_game.php';
    }

    public function deleteGame() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=collection_jeux;charset=utf8', 'root', ''); // Modifier user/password selon ta configuration

            $id = $_GET['id'];

            $stmt = $db->prepare("DELETE FROM Jeu WHERE Id_jeu = :id");
            $stmt->execute(['id' => $id]);

            header("Location: games.php");
            exit;

        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function addGame() {
        try {
            $db = new PDO('mysql:host=localhost;dbname=collection_jeux;charset=utf8', 'root', ''); // Modifier user/password selon ta configuration

            $nom = htmlspecialchars($_POST['nom']);
            $editeur = htmlspecialchars($_POST['editeur'] ?? '');
            $sortie = $_POST['sortie'] ?? null;
            $description = htmlspecialchars($_POST['description'] ?? '');
            $url_jeu = htmlspecialchars($_POST['url_jeu'] ?? '');
            $url_site = htmlspecialchars($_POST['url_site'] ?? '');
            $plateformes = $_POST['plateformes'] ?? [];

            $stmt = $db->prepare("
                INSERT INTO Jeu (Nom_jeu, Editeur_jeu, Date_sortie_jeu, Desc_jeu, Url_jeu, Url_site) 
                VALUES (:nom, :editeur, :sortie, :description, :url_jeu, :url_site)
            ");
            $stmt->execute([
                'nom' => $nom,
                'editeur' => $editeur,
                'sortie' => $sortie,
                'description' => $description,
                'url_jeu' => $url_jeu,
                'url_site' => $url_site
            ]);

            $id_jeu = $db->lastInsertId();

            foreach ($plateformes as $plateforme) {
                $stmt = $db->prepare("SELECT Id_plateforme FROM Plateforme WHERE Nom_plateforme = :plateforme");
                $stmt->execute(['plateforme' => $plateforme]);
                $result = $stmt->fetch();

                if ($result) {
                    $id_plateforme = $result['Id_plateforme'];

                    $stmt = $db->prepare("
                        INSERT INTO Jeu_Plateforme (Id_jeu, Id_plateforme) 
                        VALUES (:id_jeu, :id_plateforme)
                    ");
                    $stmt->execute([
                        'id_jeu' => $id_jeu,
                        'id_plateforme' => $id_plateforme
                    ]);
                }
            }

            header("Location: add_game.php?success=1");
            exit;

        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }
}
