<?php

require_once 'data.php';
require_once 'ShawarmaInterface.php';
require_once 'ShaGov.php';
require_once 'ShaOds.php';
require_once 'ShaBar.php';
require_once 'ShawarmaCalculator.php';


$food_1 = new ShaGov($data, 0);
echo "\n";
echo "the cost of ".$food_1->getTitle()." is: ".$food_1->getCost();
echo "\n";
echo "it contains the following ingredients:";
foreach ($food_1->getIngredients() as $key => $value) {
    echo "\n";
    echo "$value";
}
echo "\n";
echo "Have a nice day :)";
echo "\n";
echo "\n";

$food_2 = new ShaBar($data, 1);
echo "\n";
echo "the cost of ".$food_2->getTitle()." is: ".$food_2->getCost();
echo "\n";
echo "it contains the following ingredients:";
foreach ($food_2->getIngredients() as $key => $value) {
    echo "\n";
    echo "$value";
}
echo "\n";
echo "Have a nice day :)";
echo "\n";
echo "\n";

$food_3 = new ShaOds($data, 2);
echo "\n";
echo "the cost of ".$food_3->getTitle()." is: ".$food_3->getCost();
echo "\n";
echo "it contains the following ingredients:";
foreach ($food_3->getIngredients() as $key => $value) {
    echo "\n";
    echo "$value";
}
echo "\n";
echo "Have a nice day :)";
echo "\n";
echo "\n";

//

$food = new ShawarmaCalculator;
$food->add($food_1);
$food->add($food_2);
$food->add($food_3);

echo "\n";
echo "Unique ings:";
echo "\n";
echo "\n";
foreach ($food->ingredients() as $key => $value) {
    echo "$value\n";
}
echo "\n";
echo "\n";

echo "Total price is: ".$food->price();
echo "\n";
