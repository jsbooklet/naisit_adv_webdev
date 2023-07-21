<?php 
    class Animal {
        // ...
    
        // Override default Destructor method
        public function __destruct() {
            echo "The Animal is now going out of scope and will be erased from memory";
        }
    }
    
?>