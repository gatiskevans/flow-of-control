<?php
    $number = readline("Enter a positive number: ");

    if($number >= 0){
        echo strlen($number);
    } else {
        echo "$number is not a positive number.";
    }
