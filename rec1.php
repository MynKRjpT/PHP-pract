<?php
function nums($i){
    if($i<=10){
        echo $i;
    nums($i+1);
}
}
nums(1);
 

?>