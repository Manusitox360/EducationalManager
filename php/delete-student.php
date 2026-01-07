<?php
require_once __DIR__ . '\..\config\db.php';


if (isset($_GET["id"])) {
$id = $_GET["id"];


$stmt = $pdo->prepare("DELETE FROM students WHERE id = ?");
$stmt->execute([$id]);
}


header("Location: ../students-list.php");
exit;
?>