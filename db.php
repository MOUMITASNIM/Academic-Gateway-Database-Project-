<?php
// Database connection
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'academic_gateway';

$connection = mysqli_connect($host, $user, $password, $db);

if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>