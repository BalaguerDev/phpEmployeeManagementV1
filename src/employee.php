<?php 
//HEADER DE NUESTRA PAGINA
  require_once "../assets/html/header.html";

//PAGINAS PARA MOSTRAR LOS EMPLEADOS, FUNCIÓN INACTIVIDAD, LOGOUT
  require_once "./library/loginManager.php";

  require_once "./library/sessionHelper.php";
  require_once "./library/employeeManager.php";
//RESTRICCIÓN ACCESO SOLO A LOGEADOS
  if(!isset($_SESSION["user"])){
        header("Location: ../index.php"); exit();
    }


echo getEmployees($_GET['id']);

?>


</body>
</html>