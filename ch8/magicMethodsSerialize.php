<?php 
    // Define a class to use as a nested object
    class Cell {
        // Properties
        public $cellType;

        // ... Methods
    }

    // Define a class to use as the outer object
    class AnimalSerialize {
        // Properties
        public $cell;
        public $furColor;
        private $runSpeed;

        // ... Methods 
        // But __clone, __serialize(), __unserialize() methods not defined
    }

    $jaguar = new AnimalSerialize("orange", 50);

    $babyJaguar = unserialize(serialize($jaguar));

    $babyJaguar->furColor = "orange-brown";
    $babyJaguar->cell->cellType = "stem";
    echo $jaguar;
    echo $babyJaguar;

?>