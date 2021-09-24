<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;


// Arithmetic operations
echo $a + $b;

// Assignment with math operators

// Increment operator

// Decrement operator

// Number checking functions
is_int(5); //true
is_numeric("3.45"); //true// it converts the number which is as string to an integer
is_numeric("3g.45"); //false;

// Conversion
$strNumber = '12.34';
$number = (int)$strNumber;
var_dump($number);
echo '<br>';
// Number functions
echo "abs(-15)=" . abs(-15) . '<br>';

// Formatting numbers

$number = 123456789.12345;
echo number_format($number, 2);

// https://www.php.net/manual/en/ref.math.php
