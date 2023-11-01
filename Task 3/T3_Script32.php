<?php
     //Question 32 create two array and merge into one array.
     $fruits = array("Apple","Mangos","Oranges","Watermelon","Banana");
     $vegetables = array("Carot","Tomato","Onion","Potato","Ladyfinger");
 
     echo "</br>";
     print_r($fruits);   
     echo "</br>";
     print_r($vegetables);
 
     echo "</br>";
     $mergeArr = array_merge($fruits, $vegetables);
     print_r($mergeArr);

?>