<?php 
    class LivingBeing {
        public string $birthType;
    
        public function __construct(string $paramBirthType) {
            // Set the values of the parent class (usually through params)
            echo "Constructing LivingBeing portion of the object<br>";
            $this->birthType = $paramBirthType;
        }
    
        public function __destruct() {
            echo "Destructing the LivingBeing portion of the object<br>";
        }
    }
    
    class Animal extends LivingBeing {
        public bool $hasClaws;
    
        public function __construct(string $paramBirthType) {
            // Call the parent class constructor
            parent::__construct($paramBirthType);
            // Set the values of the child class (usually through params)
            echo "Constructing Animal portion of the object<br>";
            $this->hasClaws = True;
        }
    
        public function __destruct() {
            // Do anything that needs to be done before the child part of the class is destructed
            echo "Destructing the Animal portion of the object<br>";
            // Call the parent class destructor
            parent::__destruct();
        }
    }
    
    $jaguar = new Animal("live");
    echo "Jaguar's birth type is: " . $jaguar->birthType . "<br>";
    echo "Does the jaguar have claws?: " . $jaguar->hasClaws . "<br>";
    
?>