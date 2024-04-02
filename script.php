<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="f" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return validation()">
<label for="username">username</label>
<input type="text" id="user" name="user" placeholder="username"><br>
<label for="pass">Password</label>
<input type="password" name="pass" id="pass" placeholder="Password"> 
<input type="submit" value="Login" id="btn">
</form>
<?php
if(isset($_POST["user"]) && isset($_POST["pass"])){
    $user=$_POST["user"];
    $pw=$_POST["pass"];
    echo "Your username is :". $user ."<br/>";
    echo "Your Password is :" . $pw . "<br/>";
}

?>
<script>
    function validation(){
        var id = document.f.user.value;
        var pw = document.f.pass.value;
        if(id.length=="" && pw.length==""){
            alert("Username and password cannot be Empty");
            return false;
        }
        else{
            if(id.length==""){
                alert("Username cannot be empty");
                return false;
            }
            if(pw.length==""){
                alert("Password cannot be empty");
               return false;
            }
        }
    }
    </script>
</body>
</html>