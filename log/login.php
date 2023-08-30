<?php
session_start();
include "db_con.php";
// Simulated user credentials
$valid_username = 'user_name';
$valid_password = 'password';

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users1 WHERE user_name='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    // if ($username === $valid_username && $password === $valid_password) {
        if (mysqli_num_rows($result) === 1) { 
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        $error_message = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php 
        if (isset($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
           
        </form>
        <h4>do you have no account  <a href='register.php'>register here</a></h4>
    </div>
</body>
</html>
