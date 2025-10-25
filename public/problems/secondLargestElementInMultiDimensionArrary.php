<?php
// Problem: Find the Second-largest element in a multidimensional array

$inputArray = [
    [6, 7, 4],
    [1, 3, 0]
];

/**
 * Function will return an array having the largest and second-largest element
 *
 * @param $inputArray array multidimensional Array
 * @return array|int[]
 */
function secondHighestElement (array $inputArray) {
    $largestElement = 0;
    $secondLargestElement = 0;

    for($i=0;$i<count($inputArray);$i++) {
        for($j=0;$j<count($inputArray[$i]);$j++)  {
            if($inputArray[$i][$j] > $largestElement ) {
                $secondLargestElement = $largestElement;
                $largestElement = $inputArray[$i][$j];
            }
        }
    }
    return ['largest'=>$largestElement,'secondLargest'=> $secondLargestElement];
}

print_r(secondHighestElement($inputArray));
