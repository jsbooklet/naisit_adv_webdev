<?php 
    class Feline {
        public function eat(){
            echo "<br>Feline is eating<br>";
        }
    }

    class Jaguar extends Feline {
        public function eat(){
            echo "<br>Jaguar is eating<br>";
        }
    }

    $longFeline = new Feline(); // Output: Feline is eating
    $longFeline->eat();

    $spottedJaguar = new Jaguar();
    $spottedJaguar->eat(); // Output: Jaguar is eating

?>