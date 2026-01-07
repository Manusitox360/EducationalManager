<?php
require_once __DIR__ . '\..\config\db.php';


$search = isset($_GET['search']) ? trim($_GET['search']) : '';


if ($search !== '') {
$stmt = $pdo->prepare("SELECT * FROM students WHERE name LIKE ? ORDER BY id ASC");
$stmt->execute(["%$search%"]);
} else {
$stmt = $pdo->query("SELECT * FROM students ORDER BY id ASC");
}


$students = $stmt->fetchAll();
?>