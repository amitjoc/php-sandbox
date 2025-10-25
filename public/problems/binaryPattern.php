<?php
/**
 * Problem: Binary Triangle
 * 1
 * 0 1
 * 0 1 0
 * 1 0 1 0
 *
 */

function printBinaryTriangle($length)
{
    for ($row = 0; $row < $length; $row++) {
        for ($col = 0; $col <= $row; $col++) {
            echo ($row+$col)%2;
        }
       echo PHP_EOL;
    }
}

printBinaryTriangle(5);
