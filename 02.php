<?php

    $number = readline("Enter the number: ");

    //todo print if number is positive or negative

    if(is_numeric($number) && $number >= 0){
        echo "$number is a positive number.";
    } else {
        echo "$number is a negative number.";
    }