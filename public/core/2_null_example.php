<?php
// define strict types as 1;
declare(strict_types=1);

$my_null_var_1 = null;

var_dump($my_null_var_1);           // null
var_dump(is_null($my_null_var_1));  // true

$empty_array = array();

var_dump($empty_array == null);   // true 
var_dump($empty_array === null);  // false
var_dump(is_null($empty_array));  // false

$my_int_var = 10; // (null)$my_int_var;  // This line will cause a syntax error in PHP
 
// NOTE: 
// 01. An uninitialized variable is considered null
// 02. A variable assigned the value null is also considered null
// 03. An empty array is NOT considered null for is_null() function
// 04. An empty array is considered equal to null when using the loose comparison operator (==), 
//     but not with the strict comparison operator (===)
// 05. Use is_null() function to check if a variable is null
// 06. Use strict comparison (===) to differentiate between null and other types like empty array
// 07. Always declare strict types at the beginning of the file for type safety
// 08. casting to (null) is not valid in PHP and will result in a syntax error 
// 09. To explicitly set a variable to null, use the assignment operator (=) like $var = null;
// 10. When checking for null, prefer using is_null() or strict comparison (===) for clarity and accuracy.
// 11. unset() function can be used to unset a variable, making it null.