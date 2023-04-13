<?php
/* --- Sanitizing Inputs -- */

/*
  Los datos enviados a través de un formulario no se desinfectan de forma predeterminada. Tenemos métodos para desinfectar los datos manualmente.
*/

if (isset($_POST['submit'])) {
  // $name = $_POST['email'];
  // $email = $_POST['email'];

  // htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

  // filter_var() - Desinfectar datos
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Desinfectar entradas
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  // FILTER_SANITIZE_STRING - Convierta cadena en cadena con solo caracteres alfanuméricos, espacios en blanco y los siguientes caracteres - _.:/
  // FILTER_SANITIZE_EMAIL - Convertir cadena a una dirección de correo electrónico válida
  // FILTER_SANITIZE_URL - Convertir cadena a una URL válida
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML codifica caracteres especiales, mantiene espacios y la mayoría de los demás caracteres
} ?>

<!-- Pass data through a form -->
<!-- php_self se puede usar para xss-->
<form action="<?php echo htmlspecialchars(
  $_SERVER['PHP_SELF']
); ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<?php echo $email; ?>
<div>
<label>Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
