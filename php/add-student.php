<?php
require_once __DIR__ . '\..\config\db.php';


if ($_SERVER["REQUEST_METHOD"] === "POST") {
$name = $_POST["name"];
$age = $_POST["age"];


if (!empty($name) && $age > 0) {
$stmt = $pdo->prepare("INSERT INTO students (name, age) VALUES (?, ?)");
$stmt->execute([$name, $age]);
}
}


header("Location: ../students-list.php");
exit;
?>