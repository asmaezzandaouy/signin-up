<?php
session_start();

if (isset($_POST['SignUp'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($fName) || empty($lName) || empty($email) || empty($password)) {
        header("Location: index.php?error=empty_fields");
        exit();
    }

    $_SESSION['registered_email'] = $email;
    $_SESSION['registered_password'] = $password;
    $_SESSION['user'] = [
        'fName' => $fName,
        'lName' => $lName
    ];

    header("Location: index.php");
    exit();
}
?>
