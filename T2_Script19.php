<?php
    // chechk whether  a number is prime number or not.
    $numberForCheck = 19;
    $flag = 0;
    $division = $numberForCheck/2;

    if($numberForCheck == 0 || $numberForCheck == 1){
        echo "Please put some another value.","<br>";
    }
    else{
        for ($i = 2; $i < $division; $i++){
            if($numberForCheck %  $i == 0 ){    
               echo "It is not a Prime number.";
                $flag=1;
            }
        }
        if($flag == 0){
            echo "It is a Prime number.";
        }
    }
?>