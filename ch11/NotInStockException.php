<?php
class NotInStockException extends Exception {
    private $desiredHairColor;
    public function __construct($desiredHairColor, $message = "", $code = 1007, Throwable $previous = null){
        $this->desiredHairColor = $desiredHairColor;
        echo "$this->desiredHairColor";
        parent::__construct($message, $code, $previous);
    }
}

$exception = new NotInStockException("pink");
?>