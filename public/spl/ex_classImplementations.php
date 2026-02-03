<?php

use PhpSandbox\Classes\Book;

include_once __DIR__ . '/../../vendor/autoload.php';

$bookObject = new Book();

echo "<pre>";
print_r(class_implements($bookObject));