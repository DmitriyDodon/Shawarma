<?php

require_once '../vendor/autoload.php';

$odessa = new \Shawarma\ShawarmaTypes\ShawarmaOdessa(69, explode(', ', file_get_contents('../Ingredients/ShawarmaOdessa.ingredients')), 'Шаурма Одесская');
$lamb = new \Shawarma\ShawarmaTypes\ShawarmaLamb(85, explode(', ', file_get_contents('../Ingredients/ShawarmaLamb.ingredients')), 'Шаурма из Баранины');
$beef = new \Shawarma\ShawarmaTypes\ShawarmaBeef(75, explode(', ', file_get_contents('../Ingredients/ShawarmaBeef.ingredients')), 'Шаурма говяжья');

$new = new \Shawarma\Calculator\ShawarmaCalculator();
$new->add($odessa ,$lamb);

echo "<h2>Total price: <br></h2>";
echo "<ul>";
echo "<li>" .$new->price(). "</li>";
echo "</ul>";

echo "<h2><br>All ingredients with out repeating:</h2>";

echo "<ul>";
foreach ($new->ingredients() as $ingredient){
    echo "<li>" . $ingredient . "</li>";
}
echo "</ul>";




