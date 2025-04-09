<?php

$host = 'mysql';
$db = 'app_db';
$user = 'user';
$pass = 'secret';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "✅ Connexion MySQL réussie.";
} catch (PDOException $e) {
    echo "❌ Erreur de connexion : " . $e->getMessage();
}
