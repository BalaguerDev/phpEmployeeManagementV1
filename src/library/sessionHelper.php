<!-- Este archivo comprobará que la sesión del usuario sigue activa y si no es así, deberá llamar a la función correspondiente de "loginManager.php" para cerrar la sesión del usuario. En el caso de que el usuario permanezca más de 10 minutos en la sesión, habrá que cerrar la sesión del usuario. -->


<?php
require_once("loginManager.php");

session_start();
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();

    }else if (time() - $_SESSION['tiempo'] > 5) {
    
    sessionLogout();
    }

$_SESSION['tiempo']=time(); //Si hay actividad seteamos el valor al tiempo actual

?>