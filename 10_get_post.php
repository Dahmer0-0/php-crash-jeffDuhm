<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  Podemos pasar datos a través de direcciones URL y formularios usando las superglobales $_GET y $_POST.
*/

// Si está establecido...
if (isset($_POST['submit'])) {
  // echo '<h3>' . $GET['username'] . '</h3>';
  echo '<h3>' . $_POST['username'] . '</h3>';
} ?>

<!-- Pasar datos a través de un enlace -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=Brad">Link</a>


<br><br>

<!-- Pasar datos a través de un formulario -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
