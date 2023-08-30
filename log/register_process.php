<?php
session_start();
include "db_con.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Perform database insert
        $sql = "INSERT INTO users1 (user_name, password) VALUES ('$username', '$password')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['message'] = 'Registration successful. You can now log in.';
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['message'] = 'Registration failed. Please try again.';
            header("Location: register.php");
            exit();
        }
    }
}
?>
