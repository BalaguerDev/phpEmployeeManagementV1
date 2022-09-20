<?php

include("employeeManager.php");


if(isset($_GET["action"])&&$_GET["action"]=="listEmployees"){
    echo getEmployee();
}

?>

