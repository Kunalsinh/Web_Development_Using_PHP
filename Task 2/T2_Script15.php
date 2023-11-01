<?php
    // getting largest number from 3 numbers which are given by user.

    $num1 = 40;
    $num2 = 30;
    $num3 = 10;

    if($num1 >= $num2 && $num1 >= $num3){
        echo "Largest number is $num1";
    } 
    else if($num2 >= $num1 && $num2 >= $num3){
        echo "Largest number is $num2";
    }
    else {
        echo "Largest number is $num3";
    }
    
?>