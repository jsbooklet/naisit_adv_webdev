<?php 
    class Animal{
        public function eat(){
            echo "<br>The Animal is eating by using its mouth to take in nutrients<br>";
        }
    }

    class Feline extends Animal {
        public function eat(){
            echo "<br>The Feline is eating by stalking and pouncing, then using its mouth to take in nutrients<br>";
        }
    }

    class Jaguar extends Feline {
    }

    $fastAnimal = new Animal();
    $fastAnimal->eat(); 
    // Output: The Animal is eating by using its mouth to take in nutrients

    $spottedJaguar = new Jaguar();
    $spottedJaguar->eat(); 
    // Output: The Feline is eating by stalking and pouncing, then using its mouth to take in nutrients

?>