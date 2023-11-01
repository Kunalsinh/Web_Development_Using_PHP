<?php
    // find the factorial of given number and display the result.

    $number = 5;
    $factorial = 1;
    for($i = 1;$i <= $number; $i++){
        $factorial = $factorial * $i;
    }
    echo "Factorial of 5 is $factorial.";

?>