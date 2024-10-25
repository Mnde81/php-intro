<?php

$file_name = "data.txt";

$file = fopen($file_name, mode: "r");

var_dump($file);

echo "<br>";

if($file) {
    $content = fread($file, filesize($file_name));
    echo nl2br($content);
    fclose($file);
} else {
    echo "Unable to open file";
} 