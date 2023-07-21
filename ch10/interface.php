<?php 
    interface CanSwim
    {
        public function swim(): string;
    }
    
    // Cannot instantiate CanSwim object because it is only an interface
    $canSwim = new CanSwim();
    
?>