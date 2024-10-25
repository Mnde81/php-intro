<?php

$directory = "uploads";

// if(!file_exists($directory)) {
//     mkdir($directory, 0777, true);
//     echo "Directory created";
// } else {
//     echo "Directory already exists";
// }



if(is_dir($directory)) {
    $files = scandir($directory);
    foreach ($files as $file) {
        if($file !== "." && $file !== "..") {
            echo "File: $file\n" . "<br>";
        } 
    }
}