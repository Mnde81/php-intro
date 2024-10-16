<?php

$is_admin = false;

echo $is_admin ? "Welcome" : "Denied";


echo "<br>";


$age = 18;
$status = ($age >= 18) ? "adult" : "minor";

echo $status;


echo "<br>";


$user = ['name' => "John"];
$age = $user['age'] ?? 'unknown';

echo "Age: " . $age;
