<?php

/*
  Script to construct the following pattern.
 *
 * *
 * * *
 * * * *
 * * * * *
 * * * * *
 * * * *
 * * *
 * *
 *
 */

for ($row = 1; $row < 10; $row++) {
    for ($col = 1; $col <= ($row <= 5 ? $row : 10 - $row); $col++) {
        echo "* ";        
    }
    echo PHP_EOL;
}