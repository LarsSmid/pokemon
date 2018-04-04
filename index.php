<h1>Pokebattle</h1>
<?php

//require all files
require 'Pokemon.php';
require 'EnergyType.php';
require 'Weakness.php';
require 'Resistance.php';
require 'Attack.php';
require 'Pikachu.php';
require 'Charmeleon.php';

//create custom pikachu
$pikapika = new Pikachu("PikaPika");

//create custom Charmeleon
$balbasar = new Charmeleon("Balbasar");

echo "PIKAPIKA";
//print custom pikachu
print_r('<pre>' . $pikapika . '</pre>');

echo "BALBASAR";
//print custom charmeleon
print_r('<pre>' . $balbasar . '</pre>');

//attack balbasar
echo "Pikachu valt charmeleon aan met de electric ring attack";
$pikapika->attack($pikapika->attacks[0]->hitpoints, $balbasar);

//attack balbasar
echo "Charmeleon valt pikachu aan met de Flare  attack";
$balbasar->attack($balbasar->attacks[1]->hitpoints, $pikapika);
