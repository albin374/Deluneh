<?php

$host = '127.0.0.1';
$db   = 'delunh_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    try {
        $pdo->exec("ALTER TABLE home_sections ADD COLUMN has_explore_all TINYINT(1) DEFAULT 0");
    } catch (\PDOException $e) {}
    
    try {
        $pdo->exec("ALTER TABLE home_sections ADD COLUMN explore_all_link VARCHAR(255) NULL");
    } catch (\PDOException $e) {}
    
    echo "Columns ensured successfully!";
} catch (\PDOException $e) {
    echo "Error: " . $e->getMessage();
}
