<?php


/* AGREGAR EMPLEADO// EMPLEADO NUEVO */
function addEmployees($newEmployee){
    $path = file_get_contents("../../resources/employees.json");
    $employees = json_decode($path, true);
    
    $newEmployee["id"] = end($employees)["id"]+1;          //función para que no se repitan los id, y autoasignarles un numero dependiendo del último
    array_push($employees, $newEmployee);
    file_put_contents("../../resources/employees.json", json_encode($employees));
    echo json_encode($employees);
}





/* EDITAR EMPLEADO */
 function editEmployee($updateEmployee){
    $editRow = $_GET['editRow'];
    $path = file_get_contents("../../resources/employees.json");
    $employees = json_decode($path, true);

    $row = $employees[$editRow];
    array_push($employees, $updateEmployee);

    $path = json_encode($employees, JSON_PRETTY_PRINT);
 file_put_contents("../../resources/employees.json", $path);
 
 header('location: dashboard3.php');
} 




/* DELETE EMPLEADO */ 
function deleteEmployee($deleteId){
    $path = json_decode(file_get_contents("../../resources/employees.json"),true);
   

    for ($e=0 ; $e< count($path) ; $e++){

        if(strval($path[$e]["id"]) === $deleteId){
        $employeesPos = array_search($path[$e],$path);
        array_splice($path,$employeesPos,1);
        }
  
    }
    file_put_contents("../../resources/employees.json", json_encode($path));
    $arrayPath = (array)$path;
    echo json_encode($arrayPath);
}


function getEmployees($id){    
    $path = json_decode(file_get_contents("../resources/employees.json"), true);

    for ($e=0 ; $e< count($path) ; $e++){
//strval = string value = valor insertado lo convierte a un string
        if(strval($path[$e]["id"]) === $id){
            
        ?>

            <form method="POST" name="frmUpdate"action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <table align="center">
                    <tr>
                        <td colspan="2" align="center">Update Record</td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="txtName" value="<?php echo $path[$e]['name'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="txtLastName" value="<?php echo $path[$e]['lastName'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="eem" name="txtEmail" value="<?php echo $path[$e]['email'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type="text" name="txtStreet" value="<?php echo $path[$e]['age'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Street Adress</td>
                        <td><input type="text" name="txtState" value="<?php echo $path[$e]['streetAddress'];?>"> </td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><input type="text" name="txtAge" value="<?php echo $path[$e]['city'];?>"> </td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td><input type="text" name="txtPostalC" value="<?php echo $path[$e]['state'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Postal Code</td>
                        <td><input type="text" name="txtPhone" value="<?php echo $path[$e]['postalCode'];?>"> </td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="text" name="txtPhone" value="<?php echo $path[$e]['phoneNumber'];?>"> </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Update" name="btnUpdate"> </td>
                    </tr>
            </table>
        </form>
        <?php
        }
    }
}


/* function updateEmployee(array $updateEmployee)
{
// TODO implement it
}  */


function listEmployees(){    
    $path = json_decode(file_get_contents("../../resources/employees.json"), true);
    echo json_encode($path);

    
}


 function removeAvatar($id)
{
// TODO implement it
}  


/*   function getQueryStringParameters(): array
{

}

  

  function getNextIdentifier(array $employeesCollection): int
{

}
*/


?>