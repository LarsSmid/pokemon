<?php
class Resistance {
    //declare variables
    public $name;
    public $value;

    //construct function
    public function __construct($name, $value){
        $this->name = $name;
        $this->value = $value;
    }

    //json encoe for string
    public function __toString() {
          return json_encode($this);
    }
}
