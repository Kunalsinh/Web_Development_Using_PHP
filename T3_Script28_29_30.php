<?php
    //Question 28 sort an array in ascending order
    $arrNumber = array(1,24,33,4,83,9,10,51,18,91,34,33);
    print_r($arrNumber);
    sort($arrNumber);
    echo "</br>";
    print_r($arrNumber);

    // Question 29 sort an array in reverse order
    rsort($arrNumber);
    echo "</br>";
    print_r($arrNumber);

    // Question 30 removes duplicates values from the array using array_unique()
    echo "</br>";
    $newArr = array_unique($arrNumber);
    print_r($newArr);

?>