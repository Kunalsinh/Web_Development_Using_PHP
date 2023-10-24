<?php
    //Question 16 Indexed array of Cities
    $cities = array("Rajkot","Ahemdabad","Mumbai","Delhi","Banglore");
    print_r($cities);
    echo "</br>";

    //Question 17 Add new city to array .
    $cities[] = "Guvahati";
    print_r($cities);   
    echo "</br>";

    //Question 18 remove city from choice and display updated array.
    unset($cities[3]);
    $newCities = array_values($cities);
    print_r($newCities);
    echo "</br >";

    //Question 19 Sort cities of array in alphabetical order
    sort($cities);
    print_r($cities);    
    echo "</br>";
    //Question 20 Reverse the order of qu.19

    rsort($cities);
    print_r($cities);    
?>