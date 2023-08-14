<?php
class WrongUser extends Exception {
    private $username;
    public function __construct($username, $message, $code = 0, Throwable $previous = null){
        $this->username = $username;
        parent::__construct($message, $code, $previous);
    }

    public function getUsername(){
        return $this->username;
    }
}

?>