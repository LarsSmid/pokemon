<?php
class Weakness {
    //declare variables
    public $name;
    public $multiplier;

    //construct function
    public function __construct($name, $multiplier){
        $this->name = $name;
        $this->multiplier = $multiplier;
    }

    //json encode for string
    public function __toString() {
          return json_encode($this);
    }
}
