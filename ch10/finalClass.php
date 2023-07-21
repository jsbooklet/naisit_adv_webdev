<?php 
    class LivingBeing {
        // ...    
    }

    class Animal extends LivingBeing {
        // ...    
    }

    class Feline extends Animal {
        // ...    
    }

    final class Jaguar extends Feline {
        // ...
    }

    // Error: May not inherit from final class
    final class Cat extends Jaguar {
        // ...
    }

?>