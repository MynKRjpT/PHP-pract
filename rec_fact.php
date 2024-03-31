<?php
function fact($i){
    if($i==0){
        return 0;
    }
    if($i==1){
        return 1;
    }
    else{
        return $i * fact($i-1);
    }
}

echo fact(11);
?>