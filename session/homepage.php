<?php
session_start();
if(isset($_SESSION["email"]) && isset($_SESSION["password"])){
    echo "Welcome :". $_SESSION["email"]. "<br>";
    echo "Your PASSWORD :" .$_SESSION["password"] . "<br>";
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
    <input type="button" name="logout" value="Logout" onClick="logout();">
    <script>
        function logout(){
            url="\logout.php";
            
          window.location.href=url;
        }
        </script>
</body>
</html>