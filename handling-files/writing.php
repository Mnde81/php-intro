<?php

$file_name = "data.txt";

$file = fopen($file_name, mode: "a");

var_dump($file);

echo "<br>";

if($file) {
    fwrite($file, data:"Hello I am a new paragraph\n");
    fclose($file);
    echo "File written successfully";
} else {
    echo "Unable to write";
} 