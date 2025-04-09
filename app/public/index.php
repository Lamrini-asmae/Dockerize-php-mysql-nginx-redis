<?php

function statusBox($label, $status, $message = '') {
    $color = $status ? 'green' : 'red';
    $emoji = $status ? '✅' : '❌';
    return "<div style='margin:10px;padding:10px;border:1px solid $color;color:$color;'>
        <strong>$emoji $label:</strong> $message
    </div>";
}

// --- PHP Check ---
$phpOk = true;
echo statusBox("PHP", $phpOk, phpversion());

// --- MySQL Check ---
try {
    $host = 'mysql';
    $db   = 'app_db';
    $user = 'user';
    $pass = 'secret';
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo statusBox("MySQL", true, "Connexion réussie à la base '$db'");
} catch (PDOException $e) {
    echo statusBox("MySQL", false, $e->getMessage());
}

// --- Redis Check ---
try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->set('test', 'ok');
    $value = $redis->get('test');
    echo statusBox("Redis", true, "Connexion OK, test = $value");
} catch (Exception $e) {
    echo statusBox("Redis", false, $e->getMessage());
}

?>
