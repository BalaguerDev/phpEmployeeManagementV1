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
 function editEmployee(array $updateEmployee){
/*     $editRow = $_GET['editRow'];*/    
    
    $employees = json_decode(file_get_contents("../../resources/employees.json"), true);
    for($emp=0 ; $emp< count($employees); $emp++){
        if($employees[$emp]["id"]     ==    $updateEmployee['id']){

        $employees[$emp]["name"]            =      $updateEmployee['name'];
        $employees[$emp]["lastName"]        =      $updateEmployee['lastName'];
        $employees[$emp]["email"]           =      $updateEmployee['email'];
        $employees[$emp]["city"]            =      $updateEmployee['city'];
        $employees[$emp]["streetAddress"]   =      $updateEmployee['streetAddress'];
        $employees[$emp]["state"]           =      $updateEmployee['state'];
        $employees[$emp]["age"]             =      $updateEmployee['age'];
        $employees[$emp]["postalCode"]      =      $updateEmployee['postalCode'];
        $employees[$emp]["phoneNumber"]     =      $updateEmployee['phoneNumber'];
        }

        
        $employees = json_encode($employees,);
        file_put_contents("../../resources/employees.json", $employees);

    header('location: ../dashboard3.php');
    }
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
        if($path[$e]["id"] == $id){
            
        $name = $path[$e]['name'];
        $lastName = $path[$e]['lastName'];
        $email = $path[$e]['email'];
        $age = $path[$e]['age'];
        $streetAddress = $path[$e]['streetAddress'];        
        $city = $path[$e]['city'];
        $state = $path[$e]['state'];
        $postalCode = $path[$e]['postalCode'];
        $phoneNumber= $path[$e]['phoneNumber'];
        $form = <<<form

            <form method="POST" name="frmUpdate" action="./library/employeeController.php?action=edit&id=$id">

                <table align="center">
                    <tr>
                        <td colspan="2" align="center">Update Record</td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td><input type="text" name="txtName" value="$name"> </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="txtLastName" value="$lastName"> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="txtEmail" value="$email"> </td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type="number" name="txtAge" value="$age"> </td>
                    </tr>
                    <tr>
                        <td>Street Adress</td>
                        <td><input type="text" name="txtStreet" value="$streetAddress"> </td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><input type="text" name="txtCity" value="$city"> </td>
                    </tr>
                    <tr>
                        <td>State</td>
                        <td><input type="text" name="txtState" value="$state"> </td>
                    </tr>
                    <tr>
                        <td>Postal Code</td>
                        <td><input type="text" name="txtPostalC" value="$postalCode"> </td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td><input type="phone" name="txtPhone" value="$phoneNumber"> </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Update" name="btnUpdate"> </td>
                    </tr>
            </table>
        </form>
        form;
       
        }
    }
    echo $form;
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