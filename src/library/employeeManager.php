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
 
    /* 
    if(!empty($employees)) */
    for($i=0 ; $i< count($employees); $i++){ 
        for($e=0 ; $e< count($employees[$i]); $e++){
        if($employees[$e]["id"]     ==    $updateEmployee['id']){
            
            $employees[$e]["name"]            =      $updateEmployee['name'];
            $employees[$e]["lastName"]        =      $updateEmployee['lastName'];
            $employees[$e]["email"]           =      $updateEmployee['email'];
            $employees[$e]["city"]            =      $updateEmployee['city'];
            $employees[$e]["streetAddress"]   =      $updateEmployee['streetAddress'];
            $employees[$e]["state"]           =      $updateEmployee['state'];
            $employees[$e]["age"]             =      $updateEmployee['age'];
            $employees[$e]["postalCode"]      =      $updateEmployee['postalCode'];
            $employees[$e]["phoneNumber"]     =      $updateEmployee['phoneNumber'];
            
        
            }
        }
        
        
        $employees = json_encode($employees);
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
        
        $form = <<< form
        <form method="POST" name="frmUpdate" action="./library/employeeController.php?action=edit&id=$id">
    

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtName" value="$name" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtLastName" value="$lastName" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control"  name="txtEmail" value="$email" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtAge" value="$age" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtStreet" value="$streetAddress" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtCity" value="$city" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtState" value="$state" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtPostalC" value="$postalCode" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="txtPhone" value="$phoneNumber" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>

                <input type="submit" value="Update" name="btnUpdate"> 

        </form>

           /*  <form method="POST" name="frmUpdate" action="./library/employeeController.php?action=edit&id=$id">
                <label> First Name:
                    <input type="text" name="txtName" value="$name"> 
                </label>

                <label> Last Name:
                    <input type="text" name="txtLastName" placeholder="$"> 
                </label>

                <label> Email:
                    <input type="text" name="txtEmail" value="$email"> 
                </label>

                <label> Age:
                    <input type="text" name="txtAge" value="$age"> 
                </label>

                <label> Street Adress:
                    <input type="text" name="txtStreet" value="$streetAddress"> 
                </label>

                <label> City:
                    <input type="text" name="txtCity" value="$city"> 
                </label>

                <label> State:
                    <input type="text" name="txtState" value="$state"> 
                </label>

                <label> Postal Code:
                    <input type="text" name="txtPostalC" value="$postalCode"> 
                </label>

                <label> Phone Number:
                    <input type="text" name="txtPhone" value="$phoneNumber"> 
                </label>

                <input type="submit" value="Update" name="btnUpdate"> 
            </form> */
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