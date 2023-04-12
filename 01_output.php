<?php // Esta es una etiqueta php. Si no hay html u otro contenido debajo del php, no necesitamos cerrar la etiqueta php.

/* ------- Salida de contenido ------- */

// Echo - Cadenas de salida, números, html, etc.
echo 'Hello';
echo 123;
echo '<h1>Hello</h1>';

// print - Similar a echo, pero un poco más lento
print 'Hello';

// print_r - Da un poco más de información. Se puede utilizar para imprimir matrices
print_r('Hello');
print_r([1, 2, 3]);

// var_dump - Incluso más información como el tipo de datos y la longitud
var_dump('Hello');
var_dump([1, 2, 3]);

// Escapar caracteres con una barra invertida
echo "Is your name O\'reilly?";

/* ------------ Comments ------------ */

// This is a single line comment

/*
      * This is a multi-line comment
      *
      * It can be used to comment out a block of code
      */

// Si hay más contenido después de PHP, como este archivo, necesita la etiqueta final. De lo contrario, no lo haces.
?>

<!-- Puede generar cualquier HTML que desee dentro de un archivo .php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <!-- Puede generar PHP incluyendo variables, etc. -->
  <h1>Hello <?php echo 'Brad'; ?></h1>
  <!-- Solo puede colocar el punto y coma después de una declaración cuando la declaración es seguida inmediatamente por una etiqueta PHP de cierre ?>. -->
  <h1>Hello <?= 'Brad' ?></h1>
</body>
</html>
