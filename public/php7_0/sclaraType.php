<?php
// php 7.0 scalar type hinting

//declare(strict_types=1);
function sumUp(int $a, int $b):int
{
    return ($a + $b);
}

echo sumUp(2,'3');
echo "<br />";
echo sumUp(3,4);

/**
 * strict_types =0
 * output:: 5 and 7 without any error
 *
 * strict_types =1
 * output:: Fatal error and TypeError
 *
 */
