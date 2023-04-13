<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);

// Encuentra la posición de la primera aparición de una subcadena en una cadena
echo strpos($string, 'o');

// Encuentra la posición de la última aparición de una subcadena en una cadena
echo strrpos($string, 'o');

// Reverse a string -Invertir una cadena
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length - Devolver parte de una cadena especificada por el desplazamiento y la longitud
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

// Cadenas formateadas: útil cuando tiene datos externos
// Diferentes especificadores para diferentes tipos de datos
printf('%s is a %s', 'Brad', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float
