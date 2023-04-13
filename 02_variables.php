<?php

/* ----- Variables & Data Types ----- */

/* --------- Tipos de datos PHP --------- */
/*
- String - Una cadena es una serie de caracteres entre comillas
- Integer - Números enteros
- Float - Decimal numbers
- Boolean - true or false
- Array - Una matriz es una variable especial, que puede contener más de un valor
- Object - A class
- NULL - Variable vacía
- Resource - Una variable especial que contiene un recurso.
*/

/* --------- Variable Rules --------- */
/*
- Las variables deben tener el prefijo $
- Las variables deben comenzar con una letra o el carácter de subrayado
- Las variables no pueden comenzar con un número.
- Las variables solo pueden contener caracteres alfanuméricos y guiones bajos (A-z, 0-9 y _)
- Las variables distinguen entre mayúsculas y minúsculas ($nombre y $NOMBRE son dos variables diferentes)
*/ 

$name = 'Brad'; // String // Pueden ser comillas simples o dobles
$age = 40; // Integer
$hasKids = true; // Boolean
$cashOnHand = 10.5; //Float

var_dump($cashOnHand);

/* --- Adición de variables a cadenas -- */

// Las comillas dobles se pueden usar para agregar variables a las cadenas
echo "$name is $age years old";

// Better to do this
echo "${name} is ${age} years old";

// Concatenar cadenas

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// Arithmetic Operators

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

// Constants - Cannot be changed
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);
