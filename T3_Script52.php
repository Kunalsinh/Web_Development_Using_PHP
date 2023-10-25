<?php
    
    //Question 52 merge two associative array
    echo "</br>";
    $alumniIntro = array("Name"=>"Jones","Surname"=>"Walter","Birthdate"=>"15/10/1999");
    $alumniDetail = array("Year"=> "2018","Result"=> "Pass","Grade"=> "O");
    $alumniResult = array_merge($alumniIntro,$alumniDetail);
    print_r($alumniResult); 
    echo "</br>";


?>