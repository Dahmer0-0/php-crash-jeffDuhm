<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Obtener la longitud de la matriz
echo count($fruits);

// Search array
echo in_array('banana', $fruits);

// Agregar a una matriz
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Agrega al principio

// Eliminar de la matriz
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Eliminar elemento específico
unset($fruits[2]);

// Dividir en trozos de 2 - split
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Usar propagación
var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

// Array of keys
$keys = array_keys($c);

// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// Array Reduce - Reducir matriz
// "carry" contiene el valor de retorno de la iteración anterior
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);
