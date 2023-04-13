<?php
/* ----------- Arrays ----------- */

/*
  Si necesita almacenar varios valores, puede usar matrices. Las matrices contienen "elementos"
*/

// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = array(1, 2, 3, 4, 5);
$fruits = array('apple','orange','pear'); 

// Salida de valores de una matriz
echo $numbers[0];
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);

/* ------ Matrices asociativas ----- */

/*
  Las matrices asociativas nos permiten usar claves con nombre para identificar valores.
*/

$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

// echo $colors[1];

// Strings as keys
$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['red'];
var_dump($hex);

/* ---- Matrices multidimensionales ---- */

/*
  Las matrices multidimensionales se utilizan a menudo para almacenar datos en formato de tabla.
*/

// Single person
$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

var_dump($people);

// Acceder a valores en una matriz multidimensional
echo $people[0]['first_name'];
echo $people[2]['email'];

// Codificar a JSON
var_dump(json_encode($people));

// Decodificar desde JSON
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));
