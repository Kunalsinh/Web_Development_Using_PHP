<?php

      //Question 35 Shuffle the elements using shuffle()
      $arrNumber = array(1,24,33,4,83,9,10,51,18,91,34,33);

      print_r($arrNumber); // Simple Array
      echo "</br>";
      shuffle($arrNumber);
      print_r($arrNumber); // Shuffled Array
  
      //Question 36 Calculate the sum of all the elements of array using array_sum
      echo "</br>";
      $arrSumNum = array_sum($arrNumber);
      print_r("Sum of all Elements are ".$arrSumNum);
      echo "</br>";

?>