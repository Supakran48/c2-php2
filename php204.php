<?php
    $x = 5; //global Variable
    //echo $x;

    function myTest(){
        global $x;
        $y = 10; // local Variable
        echo $y + $x;
    }

    myTest();
?>