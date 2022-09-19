<!-- Este archivo realizará las operaciones necesarias (crear, leer, actualizar y eliminar) que serán llamadas posteriormente por el archivo "employeeController.php". -->

<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
// TODO implement it

}


function deleteEmployee(string $id){

}


/* function updateEmployee(array $updateEmployee)
{
// TODO implement it


} */


function getEmployee(){    
    $json = file_get_contents("../resources/employees.json");
    $data = json_decode($json,true);
 
}


/* function removeAvatar($id)
{
// TODO implement it
} */


/* function getQueryStringParameters(): array
{
// TODO implement it
} */

/* function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
} */
?>
