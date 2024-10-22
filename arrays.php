<?php

$fruits = ["Apple", "Banana", "Orange"];

echo $fruits[0];

echo "<br>";

$fruits[] = "Mango";
var_dump($fruits);

echo "<br>";


$person = [
    "name" => "John",
    "age" => 24,
    "city" => "London"
];

$person['profession'] = "Developer";


foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}

echo "<br>";


$products = [
    ["name" => "Laptop", "price" => 1000, "stock" => 5],
    ["name" => "Mouse", "price" => 20, "stock" => 20],
    ["name" => "Keyboard", "price" => 10, "stock" => 30],

];

echo $products[1]["name"];

echo "<br>";

foreach ($products as $product) {
    echo $product['name'] . " costs $" . $product['price'] . "<br>"; 
}


echo "<br>";


function  calculateTotalprice($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += $product['price'];
        
    }
    return $total;
}

$totalPrice = calculateTotalprice($products);
echo "Total price of all product: $" . $totalPrice;

echo "<br>";


$app = "PHP CMS";

function exampleFunc() {
    echo $GLOBALS['app'];
}


exampleFunc();

echo "<br>";

// $app2 = "JS CMS";

// function exampleFunc2() {
//     print_r($GLOBALS);
// }


// exampleFunc2();

echo "<br>";


//arrays.php?name=John&age=24

$name = $_GET["name"];
$age = $_GET["age"];

echo "Name: " . $name . "<br>";
echo "Age: " . $age;


echo "<br>";

echo $_SERVER["SERVER_NAME"];
echo $_SERVER["HTTP_USER_AGENT"];
