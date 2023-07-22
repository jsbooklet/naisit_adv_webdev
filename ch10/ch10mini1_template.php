
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
        public function eat(){
            echo "<br>The Jaguar is eating by stalking and pouncing, piercing the skull of the prey, then using its mouth to take in nutrients<br>";
        }
    }
?>
