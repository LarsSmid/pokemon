<h1>Pokebattle</h1>
<?php

require 'Pokemon.php';
require 'EnergyType.php';

$electric =  new EnergyType(EnergyType::ELECTRIC);
$lightning =  new EnergyType(EnergyType::LIGHTNING);
$fire =  new EnergyType(EnergyType::FIRE);

print_r( '<pre>' . $electric . $lightning . $fire . '</pre>');
