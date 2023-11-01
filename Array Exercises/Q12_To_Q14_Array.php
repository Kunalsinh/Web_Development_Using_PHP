<?php   
    //Question 12 Associative array contains below details
    $Details = array("Name" => "Kunalsinh","Age" => 21,"Email" => "abc@gmail.com");
    print_r($Details);

    //Question 13 Access and Display the Age element of array. 
    echo "</br>";
    $Details["Age"]=22; // accessing the Age element of Array.
    print_r($Details["Age"]); // displaying the Age of an Array.

    //Question 14 Remove the Email from $Details.
    echo "</br>";
    unset($Details["Email"]);
    $newDetails = array_values($Details);
    print_r($newDetails); 
?>