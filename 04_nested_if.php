<?php

    $selection = (int) readline("Enter the number (0-6): ");

    if($selection === 0){
        $selection = "Sunday";
    } else if($selection === 1){
        $selection = "Monday";
    } else if($selection === 2){
        $selection = "Tuesday";
    } else if($selection === 3){
        $selection = "Wednesday";
    } else if($selection === 4){
        $selection = "Thursday";
    } else if($selection === 5){
        $selection = "Friday";
    } else if($selection === 6){
        $selection = "Saturday";
    } else {
        $selection = "Not a valid day";
    }

    echo $selection;