<?php
class Attack {

  //declare variables
    public $name;
    public $hitpoints;

    //construct function
    public function __construct($name, $hitpoints)
    {
      $this->name = $name;
      $this->hitpoints = $hitpoints;
    }

    //json encode for string
    public function __toString() {
        return json_encode($this);
      }
}
