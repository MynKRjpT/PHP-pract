<?php
// for($i=1;$i<=5;$i++){
//     for($j=0;$j<=5;$j++){
//         if($i!=$j){
//             continue;
//         }
//         echo $i.$j;
//         echo "<br/>";
//     }
// }

//....................................................................
// for($i=1;$i<=100;$i++){
//     if($i%2!=0){
//         continue;
//     }
//     echo $i;
//     echo "<br/>";
// }
//..........................................................

$i=array("ab","bc","cd","de","ef","fj");
foreach($i as $element){
    if($element=="cd"){
        // break;
        continue;
    }
    echo $element;
    echo "<br/>";
}
?>