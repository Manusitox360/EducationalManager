# Educational Center Management System

## Description

This is a complete web project for managing students in an educational center. The project provides full CRUD functionality (Create, Read, Update, Delete) for the `students` table, including search and validation features.

The system is implemented using HTML, CSS, JavaScript, and PHP with a MySQL database. The project follows good practices by separating the logic (PHP) from the presentation (HTML) and styling (CSS), and by providing visual validation for forms.

---

## Features

### Student Management

* **Create (Add Student):** Add new students with name and age.
* **Read (List & Search):** List all students with the ability to search by name.
* **Update (Edit Student):** Edit existing student data through a pre-filled form.
* **Delete (Remove Student):** Delete students with a confirmation prompt.

### Validation

* **JavaScript Validation:** Ensures name is not empty and age is between 1 and 120.
* **Visual Feedback:** Input borders turn green for valid fields and red for invalid ones.

### Database

* **MySQL Table:** `students` with columns `id`, `name`, `age`.
* **PDO:** Secure database operations using prepared statements.

### Structure

* **CSS:** Common and page-specific styles separated.
* **JS:** Separate files for shared validation and page-specific validation.
* **PHP:** Logic separated from HTML to ensure clean and maintainable code.

---

## Installation

1. Clone the repository into your web server directory.
2. Create a MySQL database named `educational_center`.
3. Import the table:

```sql
CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  age INT NOT NULL
);
```

4. Configure `config/db.php` with your database credentials.
5. Open the project in a browser and start managing students.

---

## Project Structure

```
/educational-center
│
├── config/db.php
├── css/
│   ├── common.css
│   ├── students-list.css
│   ├── add-student.css
│   └── edit-student.css
├── js/
│   ├── validation-common.js
│   ├── add-student.js
│   └── edit-student.js
├── php/
│   ├── add-student.php
│   ├── delete-student.php
│   ├── edit-student-action.php
│   └── students-list-action.php
├── students-list.php
├── add-student.html
├── edit-student.php
└── README.md
```

---

## Usage

1. Navigate to `students-list.php` to see all students.
2. Use the **Add Student** page to create new students.
3. Use the **Edit** link to modify existing student data.
4. Use the **Delete** link to remove students after confirmation.
5. Use the search bar in the list page to filter students by name.

---

## Technologies Used

* HTML5
* CSS3 (with separate common and page-specific styles)
* JavaScript (validation and visual feedback)
* PHP (server-side logic and database interaction)
* MySQL (database)

---

## Author

* [Manuel Espinosa Guillén]
