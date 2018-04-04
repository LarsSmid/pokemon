<?php
//create parrentclass "pokemon"
class Pokemon {
    //declare variables
    public $name;
    public $energyType;
    public $hitpoints;
    public $attacks;
    public $weakness;
    public $resistance;

    //constuct function
    public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance){
        $this->name = $name;
        $this->energyType = $energyType;
        $this->hitpoints = $hitpoints;
        $this->attacks = $attacks;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
    }

    public function attack($attack, $target){
      print_r(" <pre> HP voor aanval " . $target->hitpoints . "</pre>");
      //get energyTyp of the pokemon
      $energy = $this->energyType->name;
      //get weakness of opponent
      $weaknessOpponent = $target->weakness->name->name;
      //get resistance of $weaknessOpponent
      $resistanceOpponent = $target->resistance->name->name;
      //get damage of the attack
      $damage = $attack;
      //if the opponent has a weakness for the energy multiplie the damage
      if ($energy == $weaknessOpponent) {
         $damage = $damage * $target->weakness->multiplier;
      }
      //if the opponent has a resistance against the energy subtract the resistance
      if ($energy == $resistanceOpponent) {
        $damage = $damage - $target->resistance->value;
      }
      //calculate total
      $target->hitpoints = $target->hitpoints - $damage;
      //show result
      print_r(" <pre> HP na aanval " . $target->hitpoints . "</pre>");
    }

    //json encode for sting
    public function __toString() {
        return json_encode($this);
    }
}
