<?php
    // Question 1 Favourite Colours
    $colors = array("Black","Blue","Red","Orange","Green");
    print_r($colors);

    // Question 2 Add new element to the Array
    echo "</br>";
    $colors[] = "Brown";
    print_r($colors);

    // Question 3 Display the color at index 2 from array
    echo "</br>";
    print_r("Color at index 2 is ".$colors[2]);

    //Question 4 Check the color green is exists or not
    echo "</br>";
    if(in_array("Green",$colors)){
        echo "Yes,Green color is in array!";
    }
    else{
        echo "No,Green color is not in array!";
    }
?>