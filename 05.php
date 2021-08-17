<?php

    $input = strtoupper(readline("Enter a sentence: "));
    $arrayFromInput = str_split($input);

    function convertToDigits(array $letters): string {
        $message = "";
        foreach($letters as $letter) {
            switch ($letter) {
                case "A":
                    $message .= "2 ";
                    break;
                case "B":
                    $message .= "22 ";
                    break;
                case "C":
                    $message .= "222 ";
                    break;
                case "D":
                    $message .= "3 ";
                    break;
                case "E":
                    $message .= "33 ";
                    break;
                case "F":
                    $message .= "333 ";
                    break;
                case "G":
                    $message .= "4 ";
                    break;
                case "H":
                    $message .= "44 ";
                    break;
                case "I":
                    $message .= "444 ";
                    break;
                case "J":
                    $message .= "5 ";
                    break;
                case "K":
                    $message .= "55 ";
                    break;
                case "L":
                    $message .= "555 ";
                    break;
                case "M":
                    $message .= "6 ";
                    break;
                case "N":
                    $message .= "66 ";
                    break;
                case "O":
                    $message .= "666 ";
                    break;
                case "P":
                    $message .= "7 ";
                    break;
                case "Q":
                    $message .= "77 ";
                    break;
                case "R":
                    $message .= "777 ";
                    break;
                case "S":
                    $message .= "7777 ";
                    break;
                case "T":
                    $message .= "8 ";
                    break;
                case "U":
                    $message .= "88 ";
                    break;
                case "V":
                    $message .= "888 ";
                    break;
                case "W":
                    $message .= "9 ";
                    break;
                case "X":
                    $message .= "99 ";
                    break;
                case "Y":
                    $message .= "999 ";
                    break;
                case "Z":
                    $message .= "9999 ";
                    break;
                case " ":
                    $message .= "0 ";
                    break;
                case ".":
                    $message .= "1 ";
                    break;
                case ",":
                    $message .= "11 ";
                    break;
                case "!":
                    $message .= "111 ";
                    break;
                case "?":
                    $message .= "1111 ";
                    break;
                default:
                    die("Something went wrong!");
            }
        }
        return $message;
    }

    echo convertToDigits($arrayFromInput);