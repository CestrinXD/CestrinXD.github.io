<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="profil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
<section>
        <a href="home.php"><i class="bi bi-arrow-left-circle-fill"></i></a>

        <div class="top">
            <h3>Personal Data</h3>
        </div>
            <div class="isi">
                <p>username</p>
                <div><?php echo $_SESSION['username']; ?></div>
           
            </div>
            <div class="isi">
                <p>Email</p>
                <div><?php echo $_SESSION['email']; ?></div>
           
            </div>
            <div class="isi">
                <p>Phone Number</p>
                <div><?php echo $_SESSION['number']; ?></div>
           
            </div>
            <div class="isi">
                <p>Password</p>
                <div><?php echo $_SESSION['password']; ?></div>
           
            </div>

    </section>
</body>
</html>

