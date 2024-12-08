<?php
$foods = array("apple", "orange", "banana");

// Direct print kora jay na so using an index

// echo $foods[2] . "<br>";

//Push function (add "pineapple" as a string)
//array_push($foods, "pineapple");
//array_pop($foods);
//array_shift($foods);      // first element delete kore dibe 
//$reverse_array=array_reverse($foods); // ekta variable er moddhe rakhte hobe
echo count($foods) ."<br>";

// For each
foreach ($foods as $food) {
    echo $food . "<br>";
}
?>
