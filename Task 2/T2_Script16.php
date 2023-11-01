<?php
    //take sentence as input and counts how many vowels are there in the sentence.

    $sentence = "A Lion is very far from the jungle";
    $text = strtolower($sentence);
    $lengthOfText = strlen($text);

    $countV = 0;
    for($i = 0;$i < $lengthOfText;$i++){
        if($text[$i] == 'a' || $text[$i] == 'e' || $text[$i] == 'i' || $text[$i] == 'o' || $text[$i] == 'u'){
            $countV++;
        }
    }
    echo "Vowels are $countV.";

?>