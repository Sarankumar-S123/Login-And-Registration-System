<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
        <p>You have successfully logged in.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
