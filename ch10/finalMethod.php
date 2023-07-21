<?php 
    class Plant {
        // The method below cannot be overridden by any child/descendant
        final public function convertSunlight() {
            echo "Converting sunlight into energy<br>";
        }
    }

    class Orchid extends Plant {
        public function convertSunlight() {
            echo "Converting sunlight into energy<br>";
    }
    }

    // Output: Fatal error: Cannot override final method Plant::convertSunlight()
?>