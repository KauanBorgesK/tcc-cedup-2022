<?php
session_start();
include('verificalog.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    oi <?php echo $_SESSION['email']; ?>
    <a href="logout.php">Sair</a>
</body>
</html>