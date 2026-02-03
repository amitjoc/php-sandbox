<?php

$my_int = 42;
$my_int_negative = -42;
$my_int_max = PHP_INT_MAX;
$my_int_min = PHP_INT_MIN;


// operations beyound the integer limit result in float underflow/overflow
$my_int_overflow = $my_int_max + 1;
$my_int_underflow = $my_int_min - 1;

echo "Check the type of operations beyond integer limits:\n";
var_dump($my_int, $my_int_negative, $my_int_max, $my_int_min, $my_int_overflow, $my_int_underflow);

echo "Php Int Byte Size: ". PHP_INT_SIZE . "\n";
echo "Php is compiled with Bit Size: ". PHP_INT_SIZE * 8 . "\n";



// Casting Warning 
echo (int) ( (0.1+0.7) * 10 ); 
// echoes 7! because it results in 7.999999999999999 and casting happens towords zero
echo "\n";
echo (float) ( (0.1+0.7) * 10 );
echo "\n";
$float_addition = 0.1+0.7;
$float_mult = $float_addition * 10;
echo $float_mult;

