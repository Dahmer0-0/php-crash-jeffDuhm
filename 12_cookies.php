<?php
/* ------------- Cookies ------------ */

/*
  Las cookies son un mecanismo para almacenar datos en el navegador remoto y, por lo tanto, rastrear o identificar a los usuarios que regresan. Puede configurar datos específicos para que se almacenen en el navegador y luego recuperarlos cuando el usuario visite el sitio nuevamente.
*/

// Dado que las cookies se almacenan en el cliente, no debe almacenar datos confidenciales en ellas. Las sesiones son una mejor opción para almacenar datos confidenciales.

// Set a cookie
setcookie('name', 'Brad', time() + 86400 * 30); // 86400 = 1 day

// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', '', time() - 86400);
