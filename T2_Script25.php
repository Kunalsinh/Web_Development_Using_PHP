<?php
    // swap two numbers without using third variable 

    $number1 = 10 ;

    $number2 = 20 ;

    $number1 = $number1  + $number2;
    $number2 = $number1  - $number2;
    $number1 = $number1 - $number2;
    
    echo "Result of number 1 = (10) after swap : $number1 <br>";

    echo "Result of number 2 = (20) after swap : $number2 <br>";
    
?>