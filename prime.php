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
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" name="num" id="InputText" aria-describedby="emailHelp">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
if(isset($_GET['num'])){
    $num =$_GET['num'];
    $num=(int)$num;
    if($num<=1 || $num==NULL ){
        echo "NUMBER CANNOT BE NULL OR SMALLER THAN 1";        
    }
    else{
        $prime=true;
        for($i=2;$i<=sqrt($num);$i++){
            if($num%$i==0 && $i!=$num){
                $prime=false;
                break;
            }
        }
        if($prime){
            echo "$num : IS PRIME NUMBER";
        }
        else{
            echo "$num : IS NOT PRIME";
           
        }
    }    
}

?>
</body>
</html>