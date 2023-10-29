<?php
session_start();
if(isset($_SESSION["user_id"])){
   header("Location: dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MediMart E-Shop Login</title>
</head>
<body>
    <h1>Login to MediMart E-Shop</h1>
    <form action="controller.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
