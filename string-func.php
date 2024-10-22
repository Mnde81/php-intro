<?php

$str = "Hello, World";

echo strlen($str);


echo "<br>";

echo strtoupper($str);

echo "<br>";

echo strtolower($str);

echo "<br>";

$pos = strpos($str, "World");

if($pos !== false) {

    echo $pos;
}

echo "<br>";

$new_str = str_replace("World", "Student", $str);

echo $new_str;

