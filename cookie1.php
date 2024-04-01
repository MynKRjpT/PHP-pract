<?php
setcookie("user","mynk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php if(!isset($_COOKIE["user"])){
        echo "Cookie Not Set";
    }
    else{
        $user=$_COOKIE["user"];
        echo "Coookie :".$_COOKIE["user"];
        echo "Welcome :".$user;
    }
    ?>
</body>
</html>