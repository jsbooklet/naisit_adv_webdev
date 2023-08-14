<?php
// Exception to be thrown when the user input is incorrect
class InputException extends Exception {
    private $valueEntered;
    public function __construct($valueEntered, $message = "", $code = 1001, Throwable $previous = null){
        $this->valueEntered = $valueEntered;
        $message .= " Entered: $this->valueEntered";
        parent::__construct($message, $code, $previous);
    }
}
?>