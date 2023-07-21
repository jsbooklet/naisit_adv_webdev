<?php 
    // Abstract Parent class
    abstract class Machine {
        public $name;

        // A (constructor) method defined for the abstract class
        public function __construct($name) {
            $this->name = $name;
        }
        // An abstract method for the abstract class
        abstract public function purpose() : string;
    }

    $catMach = new Machine("Caterpillar");
    // Fatal error: Uncaught Error: Cannot instantiate abstract class Machine

?>