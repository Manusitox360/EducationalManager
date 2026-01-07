<?php
require_once __DIR__ . '/init_db.php';

$pdo = new PDO("mysql:host=localhost;dbname=educational_manager;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);