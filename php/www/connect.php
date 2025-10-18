<?php
$host = "db";
$username = "root";
$password = "root";
$dbname = "gestion_produits";

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_SSL_CA => false
];

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
