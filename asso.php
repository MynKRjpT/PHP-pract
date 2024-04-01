<?php
$arr=array("john"=>"45000","alex"=>"50000","david"=>"48000");
// echo "John Salary :" .$arr["john"] ."<br/>" ;
// echo "alex Salary :".$arr["alex"] ."<br/>";
// echo "david Salary :".$arr["david"]."<br/>";

foreach($arr as $key=> $element){
    echo "Name :".$key ." , Salary :".$element ."<br/>";
}
?>