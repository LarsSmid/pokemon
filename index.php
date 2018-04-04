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
