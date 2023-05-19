<?php
// String
$name = "John Doe";

// Integer
$age = 30;

// Float (also known as double)
$height = 1.75;

// Boolean
$isStudent = true;

// Array
$languages = ["PHP", "JavaScript", "Python"];

// Associative Array
$person = [
    "name" => "Jane Smith",
    "age" => 25,
    "occupation" => "Engineer"
];

// Null
$location = null;

// Output the variables and their data types
echo "Name: " . $name . " (" . gettype($name) . ")<br>";
echo "Age: " . $age . " (" . gettype($age) . ")<br>";
echo "Height: " . $height . " (" . gettype($height) . ")<br>";
echo "Is Student: " . $isStudent . " (" . gettype($isStudent) . ")<br>";
echo "Languages: ";
print_r($languages);
echo " (" . gettype($languages) . ")<br>";
echo "Person: ";
print_r($person);
echo " (" . gettype($person) . ")<br>";
echo "Location: " . $location . " (" . gettype($location) . ")<br>";
?>
