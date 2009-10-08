<?php
// Parametros para conectarse a la BD
$db_host ="localhost";
$db_name ="propro";
$username="pro";
$password="propro";

// Conexión a la Base de Datos
$db_con=mysql_connect($db_host,$username,$password);
$connection_string=mysql_select_db($db_name);
?>
