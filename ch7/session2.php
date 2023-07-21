<html>
<body>

<?php
    // Eg. User entered "peter.chong"
    $username_entered = $_POST["username"]; 
    $password_entered = $_POST["password"]; 

    // Check if the username and password entered exist in the file or database of users
    // ...
 
    // If username & password match, save the user ID in the session
    $_SESSION["username"] = "peter.chong";
?>

</body>
</html>
