<?php

include("employeeManager.php");


if (isset($_GET["action"])&&$_GET["action"]=="listEmployees"){                  //LIST EMPLOYEES
    echo getEmployees();

}else if (isset($_GET["action"])&&$_GET["action"]=="addNewEmployees"){   //ADD EMPLOYEES
    $newEmployee = [
        "id" => 0,
        "name" => $_POST['txtName'],
        "lastName" => $_POST['txtLastName'],
        "email" => $_POST['txtEmail'],
        "gender" => $_POST['txtGender'],
        "city" => $_POST['txtCity'],
        "streetAddress" => $_POST['txtStreet'],
        "state" => $_POST['txtState'],
        "age" => $_POST['txtAge'],
        "postalCode" => $_POST['txtPostalC'],
        "phoneNumber" => $_POST['txtPhone']
    ];
    addEmployee($newEmployee);

}else if (isset($_GET["action"])&&$_GET["action"]=="deleteEmployees"){   //ADD EMPLOYEES
    $deleteEmployee = [
        "id" => 0,
        "name" => $_POST['txtName'],
        "lastName" => $_POST['txtLastName'],
        "email" => $_POST['txtEmail'],
        "gender" => $_POST['txtGender'],
        "city" => $_POST['txtCity'],
        "streetAddress" => $_POST['txtStreet'],
        "state" => $_POST['txtState'],
        "age" => $_POST['txtAge'],
        "postalCode" => $_POST['txtPostalC'],
        "phoneNumber" => $_POST['txtPhone']
    ];
    addEmployee($newEmployee);
}
?>