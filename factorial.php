<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET" action=" ">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Number</label>
    <input type="text" class="form-control" name="num" id="InputText" aria-describedby="emailHelp">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php

function factorial($n){
    if($n===0 || $n===1){
        return 1;
    }
    else{
        return $n*factorial($n-1);
    }
}
if(isset($_GET['num'])){
    $num =$_GET['num'];
    $num=(int)$num;
    if($num<1){
        echo "PLEASE ENTER LAGER THAN 1";
    }
        else{
            $res =factorial($num);
            echo " The factorial is $res";
        }
    
    
}

?>
</body>
</html>