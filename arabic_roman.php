<?php

/*
 * PHP function to convert Arabic Numbers to Roman Numerals
 */

function convert_to_roman($number) {

    $conversion = [
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'XV' => 15,
        'X' => 10,
        'V' => 5,
        'I' => 1,
        '0' => 0,
    ];

    $roman = "";
    foreach ($conversion as $key => $value) {

        if ($number > $value) {
            $matches = intval($number / $value);

            $roman .= str_repeat($key, $matches);

            $number = $number % $value;
        }
    }

    return $roman;
}

$num = 18;

$roman = convert_to_roman($num);
print $roman;
