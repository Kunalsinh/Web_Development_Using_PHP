<?php
    // check given year is leap year or not.
    $year = 2024; // take 2023 and chechk it 

    if($year % 400 == 0){
        echo "$year is Leap Year.";
    }
    else if($year % 100 == 0){
        echo "$year is not Leap Year.";
    }
    else if ($year % 4 == 0){
        echo "$year is Leap Year.";
    }
    else{
        echo "$year is not Leap Year.";
    }
?>