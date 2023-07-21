<?php 
    interface CanSwim {
        public function swim(): string;
    }

    class Bird implements CanSwim {
        const ARMS = "wings";
    }

    $falcon = new Bird();
    echo $falcon->swim();
    // Output: Fatal Error
?>