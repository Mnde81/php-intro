<?php

function greet() {
    echo "Hello, welcome to PHP";
}

function calculate() {
    echo 2 + 3 . "<br>";
}

greet();
calculate();


echo "<br>";

function greet2($name) {
    echo "Hello, {$name} welcome to PHP";
}

greet2("Alice");


echo "<br>";

function calculateArea($length, $width) {
    return $length * $width;
}

$areaRectangle = calculateArea(10, 5);

echo 34 + $areaRectangle;

echo "<br>";


function calculateSum($a, $b) {
    return $a + $b;
}

$sum = calculateSum(5, 10);
echo "the sum is: $sum";

echo "<br>";



function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

$number =15;

if (isEven($number)) {
    echo "the number {$number} is even";
} else {
    echo "the number {$number} is not even";

};

echo "<br>";



function greetUserwithTime($name, $greeting = "Good Morning") {
    echo "{$greeting} {$name}\n";
}

greetUserwithTime(name:"Alice");
echo "<br>";
greetUserwithTime(name:"Bob", greeting:"Good Evening");