<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
    Email    <input type="email" name="email" placeholder="email"><br><br>
    Password <input type="password" name="password" placeholder="password"><br>
    <input type="submit" name="submit" value="Login">
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        $email=$_POST["email"];
        $password=$_POST["password"];

        $_SESSION["email"]=$email;
        $_SESSION["password"]=$password;
 
        header("location:homepage.php");
        exit();
    }
    ?>
</body>
</html>