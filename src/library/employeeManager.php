<!-- Este archivo realizará las operaciones necesarias (crear, leer, actualizar y eliminar) que serán llamadas posteriormente por el archivo "employeeController.php". -->

<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

/* AGREGAR EMPLEADO// EMPLEADO NUEVO */
    if(isset($_POST['btnadd'])){
        $data = file_get_contents("../resources/employees.json");
        $data = json_decode($data, true);
        $add_arr = array(
        'gender' => $_POST['txtGender'],
        "id" => $_POST['txtId'],
        'age' => $_POST['txtAge'],
        'name' => $_POST['txtName'],
        'lastName' => $_POST['txtLastName'],
        'phoneNumber' => $_POST['txtPhone'],
        'email' => $_POST['txtEmail'],
        'city' => $_POST['txtCity'],
        'streetAddress' => $_POST['txtStreet'],
        'state' => $_POST['txtState'],
        'postalCode' => $_POST['txtPostalC'],
        );
        $data[] = $add_arr;
        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents("../resources/employees.json", $data);
// TODO implement it
}


function deleteEmployee(string $id){

}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
} 


/* function getEmployee(){    
    $json = file_get_contents("../resources/employees.json");
    $data = json_decode($json,true);
} */


function removeAvatar($id)
{
// TODO implement it
} 


 function getQueryStringParameters(): array
{
// TODO implement it
} 

 function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
} 
?>