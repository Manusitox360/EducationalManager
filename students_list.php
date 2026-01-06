<?php
require_once "php/students-list-action.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Students List</title>
<link rel="stylesheet" href="css/common.css">
<link rel="stylesheet" href="css/students-list.css">
</head>
<body>


<h1>Students List</h1>


<form method="get" action="students-list.php">
<input type="text" name="search" placeholder="Search by name" value="<?= htmlspecialchars($search) ?>">
<button type="submit">Search</button>
<a href="students-list.php">Reset</a>
</form>


<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Actions</th>
</tr>
<?php foreach ($students as $student): ?>
<tr>
<td><?= $student['id'] ?></td>
<td><?= htmlspecialchars($student['name']) ?></td>
<td><?= $student['age'] ?></td>
<td>
<a href="edit-student.php?id=<?= $student['id'] ?>">Edit</a> |
<a href="php/delete-student.php?id=<?= $student['id'] ?>" onclick="return confirm('Delete student?')">Delete</a>
</td>
</tr>
<?php endforeach; ?>
</table>


</body>
</html>