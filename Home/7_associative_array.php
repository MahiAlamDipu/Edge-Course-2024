<?php
$name = array(
    "Dipu" => "Dhaka",
    "Sagor" => "Ctg",
    "Rahi" => "Thakur"
);

// Print the value for the key "Dipu"
echo $name["Dipu"] . "<br>";


// change by using key
$name['Dipu'] = "Barisal";

//array_pop
//array_shift

//access all the keys at a time 
$all_key = array_keys($name);  // it's a array to print this we need a new array to put it then use a for each to print all the element
echo "<br><br>";
foreach($all_key as $ekta_ekta_key)
{
    echo "{$ekta_ekta_key} <br>";
}
//access all the values at a time 
$all_value = array_values($name);  // it's a array to print this we need a new array to put it then use a for each to print all the element
echo "<br><br>";
foreach($all_value as $ekta_ekta_value)
{
    echo "{$ekta_ekta_value} <br>";
}



// print using foreach loop
echo "<br><br>";
foreach($name as $key => $value)
{
    echo "{$key} -- {$value} <br>";
}

//flip key to value and value to key 
$name= array_flip($name);
echo "<br><br>";
foreach($name as $key => $value)
{
    echo "{$key} -- {$value} <br>";
}

//$reverse_array = array_reverse($name);




?>
