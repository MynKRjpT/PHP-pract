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
if(isset($_GET['num'])){
    $num=$_GET['num'];
    for($i=1;$i<=10;$i++){
        $res=$num*$i;
        echo "$res\n";
    }
}

?>
</body>
</html>