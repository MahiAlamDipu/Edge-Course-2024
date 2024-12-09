<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="9_isset()_and_empty().php" method="post">
        <label>Username : </label>
        <input type="text" name="username">
        <br><br>
        <label>Password : </label>
        
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit-button" value="Log In">
        </form>
</body>
</html>


<?php

// isset()  = Returns TRUE if a variable is declared and not null 
// empty()  = Reutrns TRUE if a variable [is not declared , false , null ,""]

//_POST is an associative array

/*
foreach($_POST as $key => $value)
{
    echo "$key ::: $value <br>";
}
*/

if (isset($_POST['submit-button'])) {

    // Fetch username and password from POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username is empty
    if (empty($username)) {
        echo "<p style='color:red;'>Error: Username is missing.</p>";
    }
    // Check if password is empty
    else if (empty($password)) {
        echo "<p style='color:red;'>Error: Password is missing.</p>";
    } else {
        // If both are provided
        echo "<p style='color:green;'>Welcome, $username!</p>";
    }
}
?>