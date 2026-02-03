<?php

$simpleIndexArray = [1,2,3,4,5];

$arrayIterator = new ArrayIterator($simpleIndexArray);

echo "Array Count: " .$arrayIterator->count();

echo "<hr />";
echo "Traverse array: ";
foreach ($arrayIterator as $key => $value) {
    echo "<br />";
    echo $key . '--' . $value;
}

echo "<hr />";echo "<pre>";
foreach ($arrayIterator as $index => $item) {
    $arrayIterator[$index] = $item *2;
}
print_r($arrayIterator->getArrayCopy());

$arrayIterator->append(25);
$arrayIterator->append(35);
$arrayIterator->append(80);
print_r($arrayIterator->getArrayCopy());

