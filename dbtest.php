<?php
require_once 'conf.php';

try {
    $pdo = new PDO(
    "mysql:host={$conf['db_host']};dbname={$conf['db_name']};charset=utf8mb4",
    $conf['db_user'],
    $conf['db_pass'],
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Database connection failed: " . htmlspecialchars($e->getMessage());
}
