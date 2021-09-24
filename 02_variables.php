<?php

// What is a variable

// Variable types

// Declare variables
/*
String
Integer
Float/double
Boolean
Null
Array
Object
Resource
 */
$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;



// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';


// Print types of the variables
echo gettype($age) . '<br>';

// Print the whole variable
var_dump($name); // this function prints all the info about a variable

// Change the value of the variable

// Print type of the variable

// Variable checking functions
is_string($name);

// Check if variable is defined
isset($name); //true
isset($address); //false
// Constants
define('PI', 3.14);
echo PI . '<br >';

// Using PHP built-in constants
