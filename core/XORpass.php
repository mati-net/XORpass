<?php

function encode($payload) {
    $payload_array = str_split($payload);

    list($first_char, $second_char, $third_char, $first_operator, $second_operator, $third_operator) = ["","","","","",""];

    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $permitted_chars_array = str_split($permitted_chars);
    foreach ($payload_array as $char){
        while ($char != ($first_char^$second_char^$third_char)) {
            $first_char = substr(str_shuffle($permitted_chars), 0, 1);
            $second_char = substr(str_shuffle($permitted_chars), 0, 1);
            foreach ($permitted_chars_array as $third_char) {
                if ($char === ($first_char^$second_char^$third_char)) {
                    break 2;
                }
            }
        }

    $first_operator = "$first_operator$first_char";
    $second_operator = "$second_operator$second_char";
    $third_operator = "$third_operator$third_char";
    }
    $payload = "(\"$first_operator\"^\"$second_operator\"^\"$third_operator\")";  
    return $payload;
}

function decode($payload) {
    $payload = str_replace(['(', ')', '^'], ['("', '")', '"^"'], $payload);

    $payload = eval("echo $payload;");
    return $payload;
}

?>