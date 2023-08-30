<?php
$sname = "localhost";     // Change this if your MySQL server is running on a different host
$uname = "root";          // MySQL username
$password = "";           // MySQL password
$db_name = "test_db";     // Your database name

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
