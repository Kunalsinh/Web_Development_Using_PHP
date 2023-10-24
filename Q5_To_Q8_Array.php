<?php
    // Question 5 create an array of numbers and count it's elements.
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    print_r($numbers);

    echo "</br>";
    
    $countArray = count($numbers);
    echo "Number of elements in Array are $countArray.";

    //Question 6 display array using loop
    echo "</br>";
    foreach($numbers as $values){
        echo $values;
    }

    //Question 7 Remove last element from the array
    echo "</br>";
    $removeArr = array_pop($numbers);
    echo "Removed element from an Array is $removeArr.";

    //Question 8 Remove specific element from an array
   echo "</br>";
    $numbers[] = 10;
    unset($numbers[3]);
    $arrNew = array_values($numbers);
    print_r($arrNew);
?>