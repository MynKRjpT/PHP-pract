<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Enter first number: <input type="number" name="first" /><br><br>
        Enter second number: <input type="number" name="second" /><br><br>
        <input type="submit" name="add" value="ADDITION" />
        <input type="submit" name="sub" value="SUBTRACTION" />
    </form>
    <?php
function add($i,$j){
$res=$i+$j;
echo "$res";
}

function sub($i,$j){
    $res=$i-$j;
    echo "$res";
}
if(isset($_POST['first']) && isset($_POST['second']) ){
    $f=$_POST['first'];
    $s=$_POST['second'];
    if($f<=NULL && $s<=NULL){
        echo "The INPUT CANNOT BE EMPTY";
    }
    else{
if(isset($_POST['add'])){
    add($f,$s);
}
if(isset($_POST['sub'])){
    sub($f,$s);
}
    }
}

?>
</body>

</html>