<?php


/* AGREGAR EMPLEADO// EMPLEADO NUEVO */
function addEmployees($newEmployee){
    $path = file_get_contents("../../resources/employees.json");
    $employees = json_decode($path, true);
    
    $newEmployee["id"] = end($employees)["id"]+1;          //función para que no se repitan los id, y autoasignarles un numero dependiendo del último
     $newObjEmployee = (object) $newEmployee;
    array_push($employees, $newObjEmployee);
    file_put_contents("../../resources/employees.json", json_encode($employees));
    echo json_encode($employees);
}
/* EDITAR EMPLEADO */




/* DELETE EMPLEADO */ 
function deleteEmployee($deleteId){
    $path = json_decode(file_get_contents("../../resources/employees.json"),true);
   

    for ($e=0 ; $e< count($path) ; $e++){

        if(strval($path[$e]["id"]) === $deleteId){
        unset($path[$e]);
        }
  
    }
    file_put_contents("../../resources/employees.json", json_encode($path));
    $arrayPath = (array)$path;
    echo json_encode($arrayPath);
}












/* function updateEmployee(array $updateEmployee)
{
// TODO implement it
}  */


function getEmployees(){    
    $path = json_decode(file_get_contents("../../resources/employees.json"), true);
    echo json_encode($path);

    
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