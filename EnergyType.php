<?php
class EnergyType  {
    const ELECTRIC = "electric";
    const LIGHTNING = "lightning";
    const FIRE = "fire";

    public $name;

    public function __construct($name){
       $this->name = $name;
      }

    public function __toString() {
          return json_encode($this);
    }
}
