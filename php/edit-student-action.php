<?php
require_once __DIR__ . '\..\config\db.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];


if (!empty($name) && $age > 0) {
$stmt = $pdo->prepare("UPDATE students SET name = ?, age = ? WHERE id = ?");
$stmt->execute([$name, $age, $id]);
}


header("Location: ../students-list.php");
exit;
}
?>