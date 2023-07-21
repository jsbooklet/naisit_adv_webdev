<?php 
    class AnimalStatic {
        public static int $numAnimals = 0;
        public $animalName;

        public function __construct($paramAnimalName) {
            $this->animalName = $paramAnimalName;
            echo "Constructing a(n) $this->animalName<br>";
            // Increase the running count of AnimalStatic objects
            self::$numAnimals++;
        }
    }

    $name = "Arctic wolf";
    $wolf = new AnimalStatic($name);
    echo "Num animals: " . AnimalStatic::$numAnimals . "<br>"; // Output: 1

    $name = "Full Arch rabbit";
    $rabbit = new AnimalStatic($name);
    echo "Num animals: " . AnimalStatic::$numAnimals . "<br>"; // Output: 2

?>