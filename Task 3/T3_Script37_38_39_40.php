<?php
    // Question 37 array_push and array_pop 
    $arrDigit = array(1,2,3,4,5);
    print_r($arrDigit);
    echo "</br>";

    array_push($arrDigit,6); // add element at the end of an array
    print_r($arrDigit);
    echo "</br>";
    
    array_pop($arrDigit); //remove last element of an array 
    print_r($arrDigit);
    echo "</br>";
    
    // Question 38 array_shift() and array_unshift()

    array_shift($arrDigit); // first element removed by array_shift() method
    print_r($arrDigit);
    echo "</br>";
    array_unshift($arrDigit,11); // add element at the start using array_unshift()
    print_r($arrDigit);
    echo "</br>";

    //Question 39 use of array_slice()
    $slicedArr = array_slice($arrDigit,0,2); // it meand start from 0 index and get two element from there 
    print_r($slicedArr);
    echo "</br>";

    //Question 40 use of array_splice()
    $arrNewElement = array(44,45);
    $arrSplice = array_splice($arrDigit,2,3,$arrNewElement); //replace the actual element and add new element to the array 
    print_r($arrDigit);
    echo "</br>";
?>