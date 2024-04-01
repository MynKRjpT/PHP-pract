
<?php
$arr=array("Shiva" =>array("Dept"=>"IT","age"=>"23"),
"Kunal"=>array("Dept"=>"IT","Age"=>"22"));
foreach($arr as $key=>$name){
    echo "Name :".$key;
    echo "<br/>";
    foreach($name as $key=>$details){
        echo $key ." :".$details ;
        
    }
    echo "<br/>";
}
?>