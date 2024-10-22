<?php

$fruits = ["Apple", "Banana", "Orange", "Mango"];

echo count($fruits);

echo "<br>";

array_push($fruits, "Mango");

array_pop($fruits);

echo "<br>";

$vegies = ["Carrot", "Plantain", "Lettuce"];

$merged = array_merge($fruits, $vegies);

print_r($merged);


echo "<br>";


if(in_array("Banana", $fruits)) {
    echo "Banana is in the array";
};

echo "<br>";


$numbers = [1,3,5,8,0,2,4,6];

sort($numbers);
print_r($numbers);


echo "<br>";

$person = ["name" => "John", "age" => 25, "city" => "London"];

ksort($person);

print_r($person);


echo "<br>";


$slices = array_slice($fruits, 1, 2);

print_r($slices);







