<?php
/*cierre de la sesion volviendo a el login(index.php)  */
session_start();
session_unset();

session_destroy();
header("location: index.php");


?>