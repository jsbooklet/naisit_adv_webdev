<?php
try (UnexpectedValueException $exception){
    $pinNum = "Bob";
    if(gettype($pinNum == "string")){
        throw new UnexpectedValueException("Pin number cannot be a string");
    }
} catch {
    echo "Exception: " . $exception->getMessage();
}
?>