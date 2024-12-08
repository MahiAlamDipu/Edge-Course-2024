<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="5_math_function.php" method="post">
    <label>Enter a Ramdom :</label><br>
    <input type="text" name="random"><br>

    <input type="submit" value="Submit">
</form>


</body>
</html>

<?php

$x = $_POST["random"];
$total = null ;

$total = abs($x);







?>


 