<?php
        // $a="abc";
        // $$a=112;
        // echo $a;
        // echo "<br>";
        // echo $$a;
        // echo "<br>";
        // echo $abc;


        // $b="India";
        // $$b="New Delhi";
        // echo $b;
        // echo "<br>";
        // echo $$b;
        // echo "<br>";
        // echo $India;


        $c="Apple";
        ${$c}="Banana";
        ${${$c}}="Orange";
        echo $c;
        echo "<br>";
        echo ${$c};
        echo "<br>";
        echo${${$c}};
        echo "<br>";
        echo $Apple;
        echo "<br>";
        echo $Banana;
        echo "<br>";
        

?>