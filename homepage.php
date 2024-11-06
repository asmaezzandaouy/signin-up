<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div style="text-align:center; padding:15%;">
        <p style="font-size:50px; font-weight:bold;">
            Hello <?php echo isset($_SESSION['user']) ? $_SESSION['user']['fName'] . ' ' . $_SESSION['user']['lName'] : ''; ?>
        </p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>