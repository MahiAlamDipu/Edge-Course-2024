<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$foods = array("apple", "orange", "banana");

// Direct print kora jay na so using an index

// echo $foods[2] . "<br>";

//Push function
array_push($foods, "pineapple");
//array_pop($foods);
//array_shift($foods);      // first element delete kore dibe 
//$reverse_array=array_reverse($foods); // ekta variable er moddhe rakhte hobe
echo count($foods) ."<br>";

// For each
foreach ($foods as $food) {
    echo $food . "<br>";
}
?>

<h1>List of Fruits</h1>
<ul>
    <?php
    foreach($foods as $food)
    {
        echo "<li>$food</li>";
    }
    ?>
</ul>

<!-- for better design (complex html fragements)-->

<h1>List of Fruits</h1>
<ul>
   <?php foreach($foods as $food): ?>

    <li> <?=$food ?> </li>

    <?php endforeach ?>
</ul>


  
</body>
</html>

