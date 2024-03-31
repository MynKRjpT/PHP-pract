<?php
     $a=6; //Global Variable
// function local_var(){
//     // $a=5; //Local Variable
//     global $a; // Accessing global varible inside function
//     echo $a;
// }
// local_var();
// echo "<br>";
// echo $a; //printing Global variable

// echo "<br>";

function static_var(){
    static $n1=3;//static variable in local function
    $n2= 4;//local variable in function
    $n3=5;//local variable in function
    global $a;//accesing global variable in function
        $a++;
        $n1++;
        $n2++;//increment of operator....
        $n3++;
            echo $n1;
            echo "<br>";
            echo $n2;
            echo "<br>";
            echo $n3;//Printin the operator...
            echo "<br>";
            echo $a;
            echo "<br>";

}

static_var();
static_var();//calling the function...
static_var();

?>