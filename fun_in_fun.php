<?php
function add(...$num){
    $sum=0;
    foreach($num as $n){
    $sum+=$n;
    }
    return $sum;
}
echo add(10,10,10,10);

?>