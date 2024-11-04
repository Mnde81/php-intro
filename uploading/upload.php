<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if($_FILES["file"]["error"] === 0) {
        $uploaddir = "uploads/";

        $file_name = basename($_FILES["file"]["name"]);

        $target_file = $uploaddir . $file_name;

        $file_size = $_FILES["file"]["size"];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $allowed_types = ['jpg', 'gif', 'png', 'jpeg'];

        if($file_size > 4 * 1024 * 1024) {
            $fileErr = "Your file is too large {$file_size}";
        }

        elseif(!in_array($file_type, $allowed_types)) {
            $fileErr = "Only JPG, JPEG, PNG and GIF files at=re allowed";

        } else {

            if(!move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
                $fileErr = "Sorry there was an error uploading your file";
            };
        }


    } else {
        switch ($_FILES['file']['error']) {
            case UPLOAD_ERR_INI_SIZE:
                $fileErr = "The uploaded files exceeds the maximum size allowed by the server";
        }


    }
    if(empty($fileErr)) {
        echo "The file has been uploaded";
    } else {
        echo $fileErr . "<br>";
    }

}

// echo "<pre>";

// var_dump($_FILES);

// echo "</pre>";


