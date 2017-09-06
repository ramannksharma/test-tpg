<?php

/**
 * PHP script to find the first character that is different between two strings.
 * String1 : 'football'
 * String2 : 'footboll'
 * Expected Result : First difference between two strings at position 5: "a" vs "o"
 */
function compute_difference($string1, $string2) {
    $len1 = strlen($string1);
    $len2 = strlen($string2);

    for ($i = 0; $i <= $len1; $i++) {
        $char1 = substr($string1, $i, 1);
        if($i < $len2) {
            $char2 = substr($string2, $i, 1);
            if($char1 !== $char2) {
                print "First difference between two strings at position {$i}: '{$char1}' vs '{$char2}'";
                break;
            }
        }
    }
}

$string1 = "football";
$string2 = "footboll";

compute_difference($string1, $string2);



