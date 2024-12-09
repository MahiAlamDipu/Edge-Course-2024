<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="8_form_with_assoArray.php" method="post">
        <label>Enter a username: </label>
        <input type="text" name="username" class="username">
        <input type="submit">
    </form>
</body>
</html>
<?php
$name = array(
    "Dipu" => "Dhaka",
    "Sagor" => "Ctg",
    "Rahi" => "Thakur"
);

$The_search_value = $_POST["username"] ?? '';  // post ekta associative array

    echo "The place where {$The_search_value} belongs is {$name[$The_search_value]}";

?>
