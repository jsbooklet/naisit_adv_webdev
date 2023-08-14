<?php 
    interface CanSwim {
        public function swim(): string;
    }

    class Duck implements CanSwim{
        const ARMS = "wings";

        public function swim(): string {
            return "The Duck is using its "  .  self::ARMS . " to swim";
        }
    }

    $spottyDuck = new Duck();
    echo $spottyDuck->swim();
    // Output: The Duck is using its wings to swim

?>