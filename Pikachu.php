<?php

class Pikachu extends Pokemon{
  //construct function
  function __construct($name)
  {
      $energyType = new EnergyType(EnergyType::ELECTRIC);
      $hitpoints = 60;
      $weakness = new Weakness( new EnergyType(EnergyType::FIRE), 1.5);
      $resistance = new Resistance(new EnergyType(EnergyType::LIGHTNING), 20);
      $attack = [new Attack("Electric Ring", 50), new Attack("Pikapunch", 20)];

      parent::__construct($name, $energyType, $hitpoints, $attack, $weakness, $resistance);
  }
}
