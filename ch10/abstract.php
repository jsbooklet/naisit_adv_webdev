<?php 
    // Abstract Parent class
    abstract class Machine {
        public $name;
        protected $id;

        // A (constructor) method defined for the abstract class
        public function __construct($name, $id) {
            $this->name = $name;
            $this->id = $id;
            echo "Constructing the Machine part of the object <br>";
        }
        // An abstract method for the abstract class
        abstract public function purpose() : string;
    }


    // Child class - it MUST implement the abstract method it inherits
    class Tractor extends Machine {
        public function purpose() : string {
            return "Plow the fields with a " . $this->name . " tractor id:  $this->id<br>";
        }

        public function __construct($name, $id) {
            parent::__construct($name, $id);
            echo "Constructing the Tractor part of the object <br>";
        }
    }

    $redTractor = new Tractor("John Deere", 673755); // Output: Constructing the Machine part of the object John Deere
    echo $redTractor->purpose(); // Output: Plow the fields with a John Deere tractor

?>