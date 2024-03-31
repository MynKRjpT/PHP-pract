<?php
function by_val(&$i){ //taking $i reference as a parameter
    $i++;
   
}
$i=10;
by_val($i);
echo "$i";
?>