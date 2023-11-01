<?php
    //Question 43 Extract the keys from associative array...using array_keys()
    echo "</br>";
    $Student = array("Name" => "James","Age" => 24,"Email"=>"james@gmail.com","Mobile"=>"9856471230");
    print_r(array_keys($Student));

    // Question 44 Extract the values from array using array_values() 
    echo "</br>";
    print_r(array_values($Student));

    //Question 45 Filp the associative array using array_flip()
    echo "</br>";
    print_r(array_flip($Student));

    //Question 46 Fill the value using array_fill()
    echo "</br>";
    print_r(array_fill(0,1,"Programmer"));

?>