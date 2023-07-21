<?php 
    class AnimalSG {
        // Properties
        public $furColor;
        private $runSpeed;

        public function getRunSpeed(): int{
            return $this->runSpeed;
        }

        public function setRunSpeed() {
            $this->runSpeed = 35;
        }

        public function run() {
            return "running <br>";
        }

        // Constructor Method
        public function __construct(string $paramFurColor, int $paramRunSpeed) {
            $this->furColor = $paramFurColor;
            $this->runSpeed = $paramRunSpeed;
        }
    }

    $wolf = new AnimalSG("gray", 31);

    echo "The AnimalSG is " . $wolf->run() . " at speed " . $wolf->getRunSpeed() . "<br>"; // Output: 31

    // Change the speed of the wolf
    echo $wolf->setRunSpeed();

    echo "The AnimalSG is " . $wolf->run() . " at speed " . $wolf->getRunSpeed() . "<br>"; // Output: 35
    // echo $wolf->runSpeed; // Results in an error because runSpeed is private
?>