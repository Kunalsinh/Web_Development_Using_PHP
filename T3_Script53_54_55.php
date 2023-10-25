<?php

    // Question 53 array_unique() on associative array
    $cities = array("Gujarat"=>"Rajkot","Maharashtra"=>"Mumbai","Goa"=>"Panji","Gujarat"=>"Rajkot");
    print_r(array_unique($cities));

    // Question 54 create Multidimesional Array and use array_column()

    $arrStudent = array(
        array("Name"=>"Smith","Age"=>21,"Email"=>"smith@gmail.com"),
        array("Name"=>"Walter","Age"=>22,"Email"=>"walter@gmail.com"),
        array("Name"=>"Jones","Age"=>23,"Email"=>"jones@gmail.com")
    );
    echo "</br>";
    print_r(array_column($arrStudent,"Name"));

    //Question 55 array_key_first() and array_key_last() use it to retrive the first and last key of an array
    
    echo "</br>";
    $arrFirst = array_key_first($cities);
    echo "First Key of an array is ".$arrFirst;

    echo "</br>";
    $arrLast = array_key_last($cities);
    echo "Last Key of an array is ".$arrLast;
?>