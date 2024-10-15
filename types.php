<?php


var_dump(5);
var_dump(2.5);
var_dump(true);

var_dump([2, "string", 2.6]);

var_dump(NULL);

echo "<br>";

$a = false;

$b = (string) 5;
var_dump($b);

echo "<br>";

$c = (int) "five";
var_dump($c);

echo "<br>";


$e = (object) ["name" => "John"]; // array casted into object

echo $e->name;

echo "<br>";

$f = NULL;

var_dump($a);

echo "<br>";

var_dump($e);

echo "<br>";
