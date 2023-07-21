<?php 
    class AnimalConst {
        const FELINE = 0;
        const CANINE = 1;
        private int $type;
    
        public function setType($type) {
            if ($type == self::FELINE || $type == self::CANINE) {
                $this->type = $type;
            } else {
                exit('Type Not Set');
            }
        }
    
        public function getType(): int{
            return $this->type;
        }
    
    }
    
    $jaguar = new AnimalConst();
    $jaguar->setType(AnimalConst::FELINE);
    echo "Jaguar type " . $jaguar->getType() . "<br>";
    
    $wolf = new AnimalConst();
    $wolf->setType(AnimalConst::CANINE);
    echo "Wolf type " . $wolf->getType() . "<br>";
    
?>