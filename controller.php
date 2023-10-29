<?php
require_once 'model.php';

if(isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $model = new Model();
    $user = $model->getUser($email);

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION["user_id"] = $user['id'];
        header("Location: dashboard.php");
    } else {
        echo "Login failed. Check your email and password.";
    }
}
?>
