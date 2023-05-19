<?php
// String variable
$message = "Hello, World!";

// Numeric variables
$number1 = 10;
$number2 = 20;

// Array variable
$languages = ["PHP", "JavaScript", "Python"];

// Using echo to output a string
echo "Using echo: " . $message . "<br>";

// Using print to output a string
print "Using print: " . $message . "<br>";

// Using print_r to output an array
echo "Using print_r: ";
print_r($languages);
echo "<br>";

// Using var_dump to output variable details
echo "Using var_dump:<br>";
var_dump($message);
var_dump($number1);
var_dump($number2);
var_dump($languages);
?>
