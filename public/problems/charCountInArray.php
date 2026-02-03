<?php

/**
 * Question: count letter frequency
 *
 * Input     : [a,a,b,c,b,d,a]
 * Output    :  a3 b2 c1 d1
 *
 */


/**
 * Algorithm CountFrequency(inputArray):
 *  Initialize result as empty map
 *  For i from 0 to length of inputArray:
 *      If inputArray[i] is not set, continue
 *      Set char = inputArray[i]
 *      Set count = 1
 *      For j from i+1 to length of inputArray:
 *          If inputArray[j] is not set, continue
 *          If inputArray[j] == char:
 *              Increment count
 *              Unset inputArray[j]
 *      Unset inputArray[i]
 *      Set result[char] = count
 *  Return result
 */

function countFrequency(array $inputArray): array {
    $result = [];

    while (!empty($inputArray)) {
        // Always take the first element
        $char = $inputArray[0];
        $charCount = 0;

        // Loop through all elements and count matches
        foreach ($inputArray as $key => $value) {
            if ($value === $char) {
                $charCount++;
                unset($inputArray[$key]); // Remove counted element
            }
        }

        // Reindex the array after unsetting
        $inputArray = array_values($inputArray);

        // Store result
        $result[$char] = $charCount;
    }

    return $result;
}


$input = ['a','a','b','c','b','d','a']; //['a','b','b','b','b','d','a'];
print_r(countFrequency($input));