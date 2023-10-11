<?php
session_set_cookie_params(60);
session_start();
    if( isset($_POST['submit']) ){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['password'];
        // $username = $_POST['username'];


        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['number'] = $number;
        $_SESSION['password'] = $password;


        // masuk ke home.php
        header('location:./home.php');
        

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Document</title>
    <style>
     /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}   
    </style>
</head>
<body>
    <section class="border">
        <h1>LOGIN</h1>
        <form action="" method="post" >
            <label for="">
            Username
            </label>
            <input type="text" placeholder="Username" name="username" required>
            <label for="">
            Email
            </label>
            <input type="email" placeholder="Email" name="email" required>

            <label for="">
            Phone Number
            </label><input type="number" placeholder="Phone Number" name="number" required>

            <label for="">
            Password
            </label><input type="password" placeholder="Password" name="password" required >
            
            <label for="">
            Confirm Pass
            </label>
            <input type="password" placeholder="Confirm Password" name="Cpassword" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </section>
</body>
</html>

