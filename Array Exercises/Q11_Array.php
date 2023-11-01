<?php
    // Question 11 Merging two different array into one array.
    $fruits = array("Apple","Mangos","Oranges","Watermelon","Banana");
    $vegetables = array("Carot","Tomato","Onion","Potato","Ladyfinger");

    print_r($fruits);
    echo "</br>";
    print_r($vegetables);

    echo "</br>";
    $mergeArr = array_merge($fruits, $vegetables);
    print_r($mergeArr);
?>