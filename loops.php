<?php

for($index =1; $index <= 5; $index++) {
    echo "Number: $index\n <br>";

}


echo "<br>";

$index1 = 1;

while($index1 <= 6) {
    echo "Number: $index1 <br>";
    $index1++;


} 

echo "<br>";

$index2 = 1;

do {
    echo "Number: $index2 <br>";
    $index2++;

} while($index2 <= 7);


echo "<br>";

$colors = ["red", "blue", "green"];

foreach($colors as $color) {
    echo "Color: $color <br>";

}


echo "<br>";

$person = ["name"=> "John", "age" => 23];

foreach($person as $key => $value) {
    echo "$key: $value <br>";

}

echo "<br>";


for($index3 = 1; $index3 <= 5; $index3++) {
    if($index3 == 3) {
        break;
    }

    echo "Number: $index3 <br>";
}


echo "<br>";


for($index4 = 1; $index4 <= 5; $index4++) {
    if($index4 == 3) {
        continue;
    }

    echo "Number: $index4 <br>";
}

