<?php
$host = 'localhost';
$user = 'root'; // Replace with your MySQL username
$password = ''; // Replace with your MySQL password
$database = 'crud_app';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) { //error handle
    die("Connection failed: " . $conn->connect_error);
}
?>
