<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }

  - Las funciones tienen su propio alcance local a diferencia del alcance global
*/

function registerUser()
{
  echo 'User has been registered!';
}

// Ejecutar una función
registerUser();

// Agregar parámetros
function registerUser2($username)
{
  echo "User ${username} has been registered!";
}

// Pasar en un argumento
registerUser2('Brad');

// Valores devueltos
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 5);
echo $sum;

// Adición de valores predeterminados
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();

// Asignación de funciones anónimas a variables. A menudo se usa para cierres y funciones de devolución de llamada.
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo $add(5, 5);

// Funciones de flecha
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(5, 5);
