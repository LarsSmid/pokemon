<?php
class EnergyType  {
    //declare const
    const ELECTRIC = "electric";
    const LIGHTNING = "lightning";
    const FIRE = "fire";
    const WATER = "water";

    //declare variables
    public $name;

    //construct function
    public function __construct($name){
       $this->name = $name;
      }
    //json encode for string
    public function __toString() {
          return json_encode($this);
    }
}
