<?php
session_start();

if (isset($_POST['SignIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if (empty($email) || empty($password)) {
        header("Location: index.php?error=empty_fields");
        exit();
    }

    if (isset($_SESSION['registered_email']) && isset($_SESSION['registered_password']) &&
        $email === $_SESSION['registered_email'] && $password === $_SESSION['registered_password']) {
        
    
        $_SESSION['email'] = $email;
        header("Location: homepage.php");
        exit();
    } else {
       
        header("Location: index.php?error=invalid_credentials");
        exit();
    }
}
?>
