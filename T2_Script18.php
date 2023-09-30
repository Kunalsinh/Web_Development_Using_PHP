<?php 
    // generate the random number from 1 and 10 , lets the user guess it. 
   // [Not a proper code and without rand()]
    $randomN = 5;
    $min = 1;
    $max = 10;
    for ($i = $min; $i <= $max ;  $i++){
        if ( $randomN == $i){
            echo "User choose $randomN.";
        }
    }

    // [with rand() function]

    $randomNumber = rand($min,$max);
    echo "Random number is $randomNumber";
?>