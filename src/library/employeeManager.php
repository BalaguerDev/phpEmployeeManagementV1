<?php


/* AGREGAR EMPLEADO// EMPLEADO NUEVO */
function addEmployee($newEmployee){
    $path = file_get_contents("../../resources/employees.json");
    $employees = json_decode($path, true);
    
    $newEmployee["id"] = end($employees)["id"]+1;          //función para que no se repitan los id, y autoasignarles un numero dependiendo del último
    $newObjEmployee = (object) $newEmployee;
    array_push($employees, $newObjEmployee);
    file_put_contents("../../resources/employees.json", json_encode($employees));
    echo json_encode($employees);
}




function deleteEmployee($deleteEmployee){
   
          
        $path = file_get_contents("../../resources/employees.json");
        $employees = json_decode($path, true);

        unset($employees["${valor.id}"]);

        $data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('members.json', $data);

    

    
    //get the index
    
 
    //fetch data from json
    $data = file_get_contents('members.json');
    $data = json_decode($data);
 
    //delete the row with the index
    unset($data[$index]);
 
    //encode back to json
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('members.json', $data);
 
    header('location: index.php');
?>
} 













/* function updateEmployee(array $updateEmployee)
{
// TODO implement it
}  */


function getEmployees(){    
    $json = file_get_contents("../../resources/employees.json");
    return $json;
}


/* function removeAvatar($id)
{
// TODO implement it
}  */


/*  function getQueryStringParameters(): array
{
// TODO implement it
}  */

/*  function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}  */

?>