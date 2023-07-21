<?php
    class Animal {
        // Properties
        public $furColor;
        public $runSpeed;

        // Override default method for printing the object
        public function __toString(){
            return "Animal: with fur color $this->furColor and running speed of $this->runSpeed";
        }

    }

    $jaguar = new Animal();
    $jaguar->furColor = "black";
    $jaguar->runSpeed = 35;
    echo $jaguar;
    
?>