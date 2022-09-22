<?php

include("employeeManager.php");


if (isset($_GET["action"])&&$_GET["action"]=="listEmployees"){                  //LIST EMPLOYEES
    listEmployees();

}else if (isset($_GET["action"])&&$_GET["action"]==="addNewEmployees"){   //ADD EMPLOYEES
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
    addEmployees($newEmployee);

} else if (isset($_GET["action"]) && $_GET["action"]==="delete"){   // DELETE EMPLOYEES
    deleteEmployee($_GET["id"]);

}else if(isset($_GET['action']) && $_GET['action']==="edit"){

    
    if(isset($_POST['btnUpdate'])){
        $updateEmployee = [
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
        $employees[$editRow] = $updateEmployee;
    }
    editEmployee($updateEmployee);
    
}

?>