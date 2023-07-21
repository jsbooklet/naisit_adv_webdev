<?php 

    // Define a class to use as a nested object
    class Cell {
        // Properties
        public $cellType;

        public function __construct() {
            $this->cellType = "blood";
        }

        public function __toString(){
            return "$this->cellType";
        }
    }

    // Define a class to use as the outer object
    class AnimalClone {
        // Properties
        public $cell;
        public $furColor;
        private $runSpeed;

        public function __construct($furColor, $runSpeed){
            $this->furColor = $furColor;
            $this->runSpeed = $runSpeed;
            $this->cell = new Cell();
        }
        // Override cloning for the nested object cell
        public function __clone(){
            $this->cell = clone $this->cell;
        }

        public function __toString(){
            //"Animal: with fur color $this->furColor and running speed of $this->runSpeed"
            return "Animal: with fur color $this->furColor and running speed of $this->runSpeed has $this->cell cells";
        }

        // ... Other Methods
    }

    $jaguar = new AnimalClone("orange", 50);
    $babyJaguar = clone $jaguar;

    // You must override the clone method for nested objects
    $babyJaguar->cell->cellType = "T";

    // But the default clone method works fine with regular properties
    $babyJaguar->furColor = "light orange";

    echo "$jaguar <br/>"; 
    echo "$babyJaguar <br/>"; 

?>