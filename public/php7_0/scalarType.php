<?php
declare(strict_types=1);
// php 7.0 scalar type hinting
// run below examples with and without declare(strict_types=1);   
// function sumUp(int $a, int $b): int 
// {
//     return ($a + $b);
// }

// echo sumUp(2,'3'); //error with strict type
// echo "<br />";
// echo sumUp(3,4); // error with strict type 


// nullable argument type and return type allowed by ?TYPE 
function addTwoNumber(float $a, ?float $b): ?float 
{
    return ($a+$b);
}

echo addTwoNumber(1.1,2.3);
echo "<br />";
echo addTwoNumber(1.1,null);
