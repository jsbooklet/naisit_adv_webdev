<form>

<?php
    // Main execution
    $user_name = "anna_kani";


    // Function scope
    function sayHello($name){ 
        // echo "$user_name : This variable is undefined in the function and will result in an error if uncommented";

        // Add some checkboxes to the form using a loop
        $greetings = ["Hello", "Goodbye", "How are you", "Welcome"];
        foreach($greetings as $greeting){
            echo "<input type='checkbox' name='choice' value='" . "$greeting" . "'>$greeting $name<br>";
        }
        
        return null;
    }

    // Call the function from the main execution
    sayHello($user_name); 

    if(isset($_GET["choice"])){
        $choice = $_GET["choice"];
        echo "You chose the greeting: $choice";
    }
?>
    <input type="submit" value="Go">
</form>
