<?php

// Load dependencies
require 'vendor/autoload.php';
 
// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Load database
require 'db.php';

try {
    $pdo = init_database();
} catch (PDOException $e) {
    echo 'Attention ! Erreur de connexion à la base de données : ' . $e->getMessage();
}


echo 'Bravo ! Vous avez réussi a déployer votre application !';
