<?php
    
      //Question 33 specific key exists or not using array_key_exists() function 
      $Details = array("Name" => "Kunalsinh","Age" => 21,"Email" => "abc@gmail.com");
      if(array_key_exists("Age",$Details)){
          echo "</br>Yes, Exists!";
      }
      else{
          echo "</br>No, It's not exists!";
      }

?>