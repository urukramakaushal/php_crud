# CRUD Application using PHP, MySQL, and Bootstrap

## Description
This is a simple CRUD (Create, Read, Update, Delete) application built using PHP, MySQL, and styled with Bootstrap. The application manages a basic "Users" table and allows you to:

- Add new users.
- View a list of users.
- Edit existing user information.
- Delete users.

## Features
- Responsive design using Bootstrap.
- Simple and beginner-friendly PHP code.
- Basic database operations with MySQL.

## Prerequisites
1. A local or online server with PHP and MySQL support (e.g., XAMPP, WAMP, or LAMP).
2. Basic knowledge of PHP, MySQL, and HTML.

## Project Structure
```
crud-app/
├── db.php          # Database connection file
├── index.php       # Displays user list
├── create.php      # Form to add a new user
├── edit.php        # Form to edit an existing user
├── delete.php      # Handles user deletion
```

## Setup Instructions

### 1. Database Setup
1. Open your MySQL database management tool (e.g., phpMyAdmin).
2. Run the following SQL commands to create the database and `users` table:

```sql
CREATE DATABASE crud_app;

USE crud_app;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);
```

### 2. Configure Database Connection
1. Open the `db.php` file.
2. Update the following lines with your database credentials:

```php
$host = 'localhost';  // Database host
$user = 'root';       // Database username
$password = '';       // Database password
$database = 'crud_app'; // Database name
```

### 3. Run the Application
1. Place the project files in your server's root directory (e.g., `htdocs` for XAMPP).
2. Start your server and navigate to `http://localhost/crud-app/index.php` in your browser.

## Usage

### 1. Add User
- Click the "Add User" button on the homepage.
- Fill in the name and email fields and click "Add".

### 2. View Users
- All users are listed on the homepage (`index.php`).

### 3. Edit User
- Click the "Edit" button next to a user.
- Update the information and click "Update".

### 4. Delete User
- Click the "Delete" button next to a user.
- Confirm the deletion when prompted.

## Technologies Used
- **PHP**: Server-side scripting.
- **MySQL**: Database management.
- **Bootstrap**: Responsive front-end framework.

## Future Enhancements
- Add validation for user input.
- Display success and error messages using Bootstrap alerts.
- Implement search and pagination for the user table.
- Enhance security (e.g., prevent SQL injection, sanitize inputs).

## License
This project is open-source and free to use for educational purposes.

---

### Author
Urukrama Kaushal

