<?php 
    // Define the Animal class with a constructor
    class AnimalWConstructor {
        // Properties
        public $furColor;
        private $runSpeed;

        // Constructor Method
        public function __construct(string $paramFurColor, int $paramRunSpeed) {
            $this->furColor = $paramFurColor;
            $this->runSpeed = $paramRunSpeed;
        }


        public function run() {
            return "running <br>";
        }

        public function eat() {
            return "eating <br>";
        }
        
    }

    // Prepare the data values for the jaguar
    $color = "orange";
    $speed = 50;

    // Call the Animal constructor for the jaguar
    $jaguar = new AnimalWConstructor($color, $speed);
    echo "Animal with fur color: " . $jaguar->furColor . " is " . $jaguar->eat();

    // Prepare the data values for the wolf
    $color = "gray";
    $speed = 31;

    // Call the Animal constructor for the wolf
    $wolf = new AnimalWConstructor($color, $speed);
    echo "Animal with fur color: " . $wolf->furColor . " is " . $wolf->eat();

    // Call the Animal constructor for the rabbit with literal values
    $rabbit = new AnimalWConstructor("white", 25);
    echo "Animal with fur color: " . $rabbit->furColor . " is " . $rabbit->run();

?>