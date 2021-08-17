<?php

    $selection = readline("Enter the number (0-6): ");

    switch($selection){
        case 0:
            $selection = "Sunday";
            break;
        case 1:
            $selection = "Monday";
            break;
        case 2:
            $selection = "Tuesday";
            break;
        case 3:
            $selection = "Wednesday";
            break;
        case 4:
            $selection = "Thursday";
            break;
        case 5:
            $selection = "Friday";
            break;
        case 6:
            $selection = "Saturday";
            break;
        default:
            $selection = "Not a valid day";
            break;
    }

    echo $selection;