<?php 
    class Animal {
        // Properties
        public $furColor;
        private $runSpeed;

        public function jump(): string{
            return "jumping";
        }
        
        public function age(): int{
            return 7;
        }

        public function eat(): string{
            return "eating";
        }
    }

    // Instantiate 3 new objects from the class
    $jaguar = new Animal();
    $wolf = new Animal();
    $rabbit = new Animal();

    // Call the eat method for the 3 objects
    echo $jaguar->eat(); // Outputs: "eating"
    echo $wolf->eat();   // Outputs: "eating"
    echo $rabbit->eat(); // Outputs: "eating"

    echo $jaguar->furColor; // Desired: "orange" // Real: none
    echo $wolf->furColor;   // Desired: "gray"  // Real: none
    echo $rabbit->furColor; // Desired: "white" // Real: none


?>