<?php

session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location : profile.php');
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang administrator : <?php echo $_SESSION['name']?></h1>
    <a href="./backend/logout.php">Logout</a>
</body>
</html>