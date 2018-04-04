<?php
//create sub class "charmeleon"
class Charmeleon extends Pokemon{
  //construct function
  function __construct($name)
  {
      //give the charmeleon class default values
      $energyType = new EnergyType(EnergyType::FIRE);
      $hitpoints = 60;
      $weakness = new Weakness( new EnergyType(EnergyType::WATER), 2);
      $resistance = new Resistance(new EnergyType(EnergyType::LIGHTNING), 10);
      $attack = [new Attack("Head Butt", 10), new Attack("Flare", 30)];

      //parent construct class
      parent::__construct($name, $energyType, $hitpoints, $attack, $weakness, $resistance);
  }
}
