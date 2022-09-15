<?php

//LOGIN
//LOGIN...TRAEMOS DATOS INSERTADOS POR EL USUARIO

$usuario = $_POST['usuario'];
$password = $_POST['pass'];

if ($usuario === '' || $password === ''){
    echo json_encode('error');
}else{
    echo json_encode('Correcto:<br> Usuario:'.$usuario.'<br>Password:'.$password);

 
}

?>