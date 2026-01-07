<?php
require_once __DIR__ .'\php\students-list-action.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Students List</title>
<link rel="stylesheet" href="css/common_styles.css">
<link rel="stylesheet" href="css/students-list_styles.css">
</head>
<body>


<h1 class="page-title">Students List</h1>

<a href="add-student.html" class="add-btn">Add Student</a>

<form method="get" action="students-list.php" class="search-form">
  <input type="text" name="search" placeholder="Search by name"
         value="<?= htmlspecialchars($search) ?>">
  <button type="submit">Search</button>
  <a href="students-list.php" class="reset-link">Refresh</a>
</form>

<table class="students-table">

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