<?php
    // largest among three numbers.

    $number1 = 10;
    $number2 = 20;
    $number3 = 60;

    if($number1 >= $number2 && $number1 >= $number3){
        echo "$number1 is Largest number among these [$number1,$number2,$number3] numbers.";
    }
    else if($number2 >= $number1 && $number2 >= $number3){
        echo "$number2 is Largest number among these [$number1,$number2,$number3] numbers.";
    }else{
        echo "$number3 is Largest number among these [$number1,$number2,$number3] numbers.";
    }
?>