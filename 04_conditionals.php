<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!';
} else {
  echo 'Sorry, you are too young to vote.';
}

// Dates
// $today = date("F j, Y, g:i a");

$t = date('H');

if ($t < 12) {
  echo 'Have a good morning!';
} elseif ($t < 17) {
  echo 'Have a good afternoon!';
} else {
  echo 'Have a good evening!';
}

// Comprobar si una matriz está vacía
// La función isset() generará una advertencia o un aviso electrónico cuando la variable no exista. La función de empty() no generará ninguna advertencia o notificación electrónica cuando la variable no existe.

$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo 'There are no posts';
}

/* -------- Ternary Operator -------- */
/*
  El operador ternario es una declaración if abreviada.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo basado en una condición (Igual que arriba)
echo !empty($posts[0]) ? $posts[0] : 'There are no posts';


// Asignar una variable basada en una condición
$firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';

$firstPost = !empty($posts[0]) ? $posts[0] : null;

// Operador coalescente nulo ?? (PHP 7.4)
// Devolverá nulo si $posts está vacío
// Siempre devuelve el primer parámetro, a menos que el primer parámetro sea NULL
$firstPost = $posts[0] ?? null;

var_dump($firstPost);
  
/* -------- Switch Statements ------- */

$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}
