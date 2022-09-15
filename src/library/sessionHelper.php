<?php
//LOG OUT 

session_start();
$_SESSION=[];
print_r($_SESSION);
session_destroy();

header("Location: ../../index.php");


?>