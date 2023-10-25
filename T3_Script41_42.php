<?php
    //Question 41 intersection of two array
    $arrListOne = array("Rajkot","Surat","Ahemdabad","Diu","Daman","Bhavanagar","Porbanadar");
    $arrListTwo = array("Rajkot","Porbanadar","Goa","Ahemdabad","Amreli");
    $resultArr = array_intersect($arrListOne,$arrListTwo);
    print_r($resultArr);

    //Question 42 finds the difference between two array using array_diff()
    echo "</br>";
    $arrDiff = array_diff($arrListOne,$arrListTwo);
    print_r($arrDiff);

?>