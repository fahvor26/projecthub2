<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../fa/css/all.css">
    <link rel="stylesheet" href="../css/tailwind.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="../js/jquery.min.js"></script>
</head>
<body>
    <?php 
        if (!isset($_SESSION['active_user'])) {
            header('location:login.php');
        }
    ?>

    
<h2>Dashboard</h2>

    
    <script src="js/script.js"></script>
</body>
</html>