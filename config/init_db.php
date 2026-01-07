<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "educational_manager";

try {
    // Connect without selecting database
    $pdo = new PDO("mysql:host=$host;charset=utf8", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Create database if it does not exist
    $pdo->exec("
        CREATE DATABASE IF NOT EXISTS $dbname
        CHARACTER SET utf8mb4
        COLLATE utf8mb4_unicode_ci
    ");

    // Select database
    $pdo->exec("USE $dbname");

    // Create students table if it does not exist
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS students (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            age INT NOT NULL
        )
    ");
} catch (PDOException $e) {
    die("Database initialization failed: " . $e->getMessage());
}
