<?php
require_once "config/db.php";


if (!isset($_GET['id'])) {
header("Location: students-list.php");
exit;
}


$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();


if (!$student) {
header("Location: students-list.php");
exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Student</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/edit-student.css">
</head>
<body>


<h1>Edit Student</h1>


<form method="post" id="editForm" action="php/edit-student-action.php">
<input type="hidden" name="id" value="<?= $student['id'] ?>">


<label for="name">Name</label>
<input type="text" id="name" name="name" value="<?= htmlspecialchars($student['name']) ?>">


<label for="age">Age</label>
<input type="number" id="age" name="age" value="<?= $student['age'] ?>">


<button type="submit">Update</button>
</form>


<script src="js/validation-common.js"></script>
<script src="js/edit-student.js"></script>
</body>
</html>