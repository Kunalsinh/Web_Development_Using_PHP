<?php
//Question 34 specific value exists or not using in_array
$fruits = array("Apple","Mangos","Oranges","Watermelon","Banana");
echo "</br>";
if(in_array("Apple",$fruits)){
    print_r($fruits);
    echo "</br>Yes,Apple is in array!";
}
else{
    print_r($fruits);
    echo "No,Apple is not in array!";
}
echo "</br>";

?>