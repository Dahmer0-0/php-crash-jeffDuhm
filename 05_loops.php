<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "Number: $x <br>";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;

while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while siempre ejecutará el bloque de código una vez, incluso si la condición es falsa.
*/

do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Bucle a través de una matriz

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $x) {
  echo "Number: $x <br>";
}

// Usar los índices dentro del ciclo

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "${index} - ${post} <br>";
}

// Use las llaves dentro del ciclo para una matriz asociativa (dicccionario)

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Obtener Keys
foreach ($person as $key => $val) {
  echo "${key} - ${val} <br>";
}
